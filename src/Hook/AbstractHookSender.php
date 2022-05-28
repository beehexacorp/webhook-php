<?php
/*
 * Copyright © 2022 Beehexa All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Beehexa\WebhookPhp\Hook;

use GuzzleHttp\Exception\TransferException;
use Beehexa\WebhookPhp\Convert\ConverterBuilder;
use Beehexa\WebhookPhp\Convert\RequestConverterInterface;
use Beehexa\WebhookPhp\Hook\Data\HookMessageInterface;

abstract class AbstractHookSender implements HookStrategyInterface
{
    protected $serviceEndpoint;


    protected $channelName;

    /**
     * @param string $serviceEndpoint
     */
    public function __construct(string $serviceEndpoint)
    {
        $this->serviceEndpoint = $serviceEndpoint;
        $this->registerConverter();
    }

    public function getEndpoint(): string
    {
        return $this->serviceEndpoint;
    }

    /**
     * @param HookMessageInterface|null $message
     * @return bool
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Exception
     */
    public function push(?HookMessageInterface $message): bool
    {
        $converter = ConverterBuilder::getConverter($this->getChannelName());
        if (!($converter instanceof RequestConverterInterface)) {
            throw new \Exception("Converter is not implement of RequestConverterInterface");
        }
        $body = $converter->convert($message);
        $client = new \GuzzleHttp\Client();
        $response = $client->post($this->getEndpoint(), ['json' => $body]);
        if ($response->getStatusCode() !== 200) {
            throw new TransferException(sprintf("Has an exception during publish the message. \r\n" .
                "Status Code: %s, Body: %s", $response->getStatusCode(), $response->getBody()));
        }
        return true;
    }

    /**
     * @return string
     * @throws \Exception
     */
    public function getChannelName(): string
    {
        if (!$this->channelName) {
            throw new \Exception("Undefined Channel Name");
        }
        return $this->channelName;
    }

    /**
     * @return void
     */
    public abstract function registerConverter();
}

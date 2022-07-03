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
    /**
     * @var string|null
     */
    protected $serviceEndpoint;

    /**
     * @var string
     */
    protected $channelName;

    /**
     * @var string
     */
    private $apiToken;

    /**
     * @param string|null $serviceEndpoint
     */
    public function __construct(?string $serviceEndpoint = null,?string $apiToken = null)
    {
        $this->serviceEndpoint = $serviceEndpoint;
        $this->apiToken = $apiToken;
        $this->registerConverter();
    }

    protected function buildUrl(array $parts) {
        return (isset($parts['scheme']) ? "{$parts['scheme']}:" : '') .
            ((isset($parts['user']) || isset($parts['host'])) ? '//' : '') .
            (isset($parts['user']) ? "{$parts['user']}" : '') .
            (isset($parts['pass']) ? ":{$parts['pass']}" : '') .
            (isset($parts['user']) ? '@' : '') .
            (isset($parts['host']) ? "{$parts['host']}" : '') .
            (isset($parts['port']) ? ":{$parts['port']}" : '') .
            (isset($parts['path']) ? "{$parts['path']}" : '') .
            (isset($parts['query']) ? "?{$parts['query']}" : '') .
            (isset($parts['fragment']) ? "#{$parts['fragment']}" : '');
    }


    /**
     * @return string
     */
    public function getEndpoint(): string
    {
        $serviceEndpoint = $this->serviceEndpoint;
        if($this->apiToken) {
            $apiParams = [];
            $parsed = parse_url($this->serviceEndpoint);
            if (!empty($parsed['query'])) {
                parse_str($parsed['query'], $apiParams);
            }
            $apiParams['apiToken'] = $this->apiToken;
            $parsed['query'] = http_build_query($apiParams);
            $serviceEndpoint = $this->buildUrl($parsed);
        }
        return $serviceEndpoint;
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

<?php
/*
 * Copyright © 2022 Beehexa All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Beehexa\WebhookPhp\Hook\Strategy;

use Beehexa\WebhookPhp\Hook\Data\HookMessageInterface;
use Beehexa\WebhookPhp\Convert\RequestConverterInterface;

class SlackConverter implements RequestConverterInterface
{
    /**
     * @inheirtDoc
     */
    public function convert(HookMessageInterface $message)
    {
        $blocks = [];
        if($fields = $message->getFields()) {
            foreach ($fields as $field) {
                $blocks[] = [
                    "type" => "section",
                    "text" => [
                        "type" => "mrkdwn",
                        "text" => sprintf("%s: %s", $field->getName(), $field->getValue())
                    ]
                ];
            }
        }
        return [
            'text' => $message->getText(),
            'blocks' => $blocks
        ];
    }
}

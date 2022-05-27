<?php
/*
 * Copyright © 2022 Beehexa All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Beehexa\WebhookPhp\Convert;

use Beehexa\WebhookPhp\Hook\Data\HookMessageInterface;

class Slack implements RequestConverterInterface
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
                        "text" => sprintf("%s: %s", $field->getField(), $field->getValue())
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

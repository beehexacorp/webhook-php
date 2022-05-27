<?php
/*
 * Copyright © 2022 Beehexa All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Beehexa\WebhookPhp\Convert;

class ConverterBuilder
{
    /**
     * Default channel provider.
     * @var string[]
     */
    private static $converter = [];

    public static function register($channel, $instanceName)
    {
        self::$converter[$channel] = $instanceName;
    }

    public static function getConverter($channelProvider)
    {
        if (isset(static::$converter[$channelProvider])) {
            return new static::$converter[$channelProvider]();
        }
        return new \Beehexa\WebhookPhp\Convert\DefaultConverter();
    }
}

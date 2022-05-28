<?php
/*
 * Copyright © 2022 Beehexa All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Beehexa\WebhookPhp\Hook\Strategy;

use Beehexa\WebhookPhp\Convert\ConverterBuilder;
use Beehexa\WebhookPhp\Convert\DefaultConverter;
use Beehexa\WebhookPhp\Hook\AbstractHookSender;

class DefaultChannel extends AbstractHookSender
{
    protected $channelName = 'default';

    /**
     * @return void
     * @throws \Exception
     */
    public function registerConverter()
    {
        ConverterBuilder::register($this->getChannelName(), DefaultConverter::class);
    }
}

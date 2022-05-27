<?php
/*
 * Copyright © 2022 Beehexa All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Beehexa\WebhookPhp\Convert;

use Beehexa\WebhookPhp\Hook\Data\HookMessageInterface;

class Json implements RequestConverterInterface
{
    public function convert(HookMessageInterface $message)
    {
        return $message->toJson();
    }
}

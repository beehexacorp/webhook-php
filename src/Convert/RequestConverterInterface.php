<?php
/*
 * Copyright © 2022 Beehexa All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Beehexa\WebhookPhp\Convert;

use Beehexa\WebhookPhp\Hook\Data\HookMessageInterface;

interface RequestConverterInterface
{
    /**
     * @param HookMessageInterface $message
     * @return string[]
     */
    public function convert(HookMessageInterface $message);
}

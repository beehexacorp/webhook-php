<?php
/*
 * Copyright © 2022 Beehexa All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Beehexa\WebhookPhp\Hook;

use  Beehexa\WebhookPhp\Hook\Data\HookMessageInterface;

interface HookStrategyInterface
{
    /**
     * @param HookMessageInterface|null $message
     * @return boolean
     * @throw \Exception
     */
    public function push(?HookMessageInterface $message);

}

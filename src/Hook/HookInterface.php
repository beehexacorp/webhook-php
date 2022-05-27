<?php
/*
 * Copyright © 2022 Beehexa All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Beehexa\WebhookPhp\Hook;

use  Beehexa\WebhookPhp\Hook\Data\HookMessageInterface;

interface HookInterface
{
    /**
     * @param HookMessageInterface|null $message
     * @return boolean
     * @throw \Exception
     */
    public function push(string $serviceEndpoint, ?HookMessageInterface $message);

}

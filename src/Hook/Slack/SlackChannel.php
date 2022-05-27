<?php
/*
 * Copyright © 2022 Beehexa All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Beehexa\WebhookPhp\Hook;

use Beehexa\WebhookPhp\Hook\Data\HookMessageInterface;

class SlackChannel implements HookInterface
{

    public function push(string $serviceEndpoint, ?HookMessageInterface $message)
    {
        // TODO: Implement push() method.
    }
}

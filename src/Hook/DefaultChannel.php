<?php
/*
 * Copyright © 2022 Beehexa All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Beehexa\WebhookPhp\Hook;

use Beehexa\WebhookPhp\Hook\Data\HookMessageInterface;
use Beehexa\WebhookPhp\Convert\ConverterBuilder;

class DefaultChannel implements HookInterface
{

    public function __construct()
    {

    }

    public function push(string $serviceEndpoint, $hookMessage)
    {

    }
}

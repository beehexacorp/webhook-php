<?php
/*
 * Copyright © 2022 Beehexa All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Beehexa\WebhookPhp;

use Beehexa\WebhookPhp\Hook\Data\HookMessageInterface;
use Beehexa\WebhookPhp\Hook\HookStrategyInterface;

class HookContext
{
    /**
     * @var HookStrategyInterface
     */
    private $strategy;

    public function __construct(HookStrategyInterface $strategy)
    {
        $this->strategy = $strategy;
    }

    /**
     * @param HookMessageInterface|null $messages
     * @return bool
     */
    public function exec(?HookMessageInterface $messages): bool
    {
        return $this->strategy->push($messages);
    }

}

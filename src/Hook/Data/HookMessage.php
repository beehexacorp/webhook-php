<?php
/*
 * Copyright © 2022 Beehexa All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Beehexa\WebhookPhp\Hook\Data;

use Beehexa\WebhookPhp\Framework\DataObject;

class HookMessage extends DataObject implements HookMessageInterface
{
    /**
     * @inheirtDoc
     */
    public function getEntityId(): ?string
    {
        return $this->getData(self::ENTITY_ID);
    }

    /**
     * @inheirtDoc
     */
    public function setEntityId(?string $id): void
    {
        $this->setData(self::ENTITY_ID, $id);
    }

    /**
     * @inheirtDoc
     */
    public function getEvent(): ?string
    {
        return $this->getData(self::EVENT);
    }

    /**
     * @inheirtDoc
     */
    public function setEvent(?string $event): void
    {
        $this->setData(self::EVENT, $event);
    }

    /**
     * @inheirtDoc
     */
    public function getText(): ?string
    {
        return $this->getData(self::TEXT);
    }

    /**
     * @inheirtDoc
     */
    public function setText(?string $text): void
    {
        $this->setData(self::TEXT, $text);
    }

    /**
     * @inheirtDoc
     */
    public function getFields(): ?int
    {
        return $this->_getData(self::FIELDS);
    }

    /**
     * @inheirtDoc
     */
    public function setFields(?array $fields): void
    {
        $this->setData(self::FIELDS, $fields);
    }
}

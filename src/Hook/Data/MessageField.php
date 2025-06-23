<?php
/*
 * Copyright © 2022 Beehexa All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Beehexa\WebhookPhp\Hook\Data;

use Beehexa\WebhookPhp\Framework\DataObject;

class MessageField extends DataObject implements MessageFieldInterface, \JsonSerializable
{

    /**
     * @inheirtDoc
     */
    public function getName(): ?string
    {
        return $this->getData(self::FIELD_NAME);
    }

    /**
     * @inheirtDoc
     */
    public function setName(?string $name): void
    {
        $this->setData(self::FIELD_NAME, $name);
    }

    /**
     * @inheirtDoc
     */
    public function getValue(): ?string
    {
        return $this->getData(self::VALUE);
    }

    /**
     * @inheirtDoc
     */
    public function setValue(?string $value): void
    {
        $this->setData(self::VALUE, $value);
    }

    /**
     * @return string[]
     */
    public function jsonSerialize(): mixed
    {
        return $this->toArray();
    }
}

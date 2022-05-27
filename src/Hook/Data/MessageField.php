<?php
/*
 * Copyright © 2022 Beehexa All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Beehexa\WebhookPhp\Hook\Data;

use Beehexa\WebhookPhp\Framework\DataObject;

class MessageField extends DataObject implements MessageFieldInterface
{
    /**
     * Getter for Field.
     *
     * @return string|null
     */
    public function getField(): ?string
    {
        return $this->getData(self::FIELD);
    }

    /**
     * Setter for Field.
     *
     * @param string|null $field
     *
     * @return void
     */
    public function setField(?string $field): void
    {
        $this->setData(self::FIELD, $field);
    }

    /**
     * Getter for Value.
     *
     * @return string|null
     */
    public function getValue(): ?string
    {
        return $this->getData(self::VALUE);
    }

    /**
     * Setter for Value.
     *
     * @param string|null $value
     *
     * @return void
     */
    public function setValue(?string $value): void
    {
        $this->setData(self::VALUE, $value);
    }
}

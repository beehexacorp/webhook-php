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
     * Getter for Id.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->getData(self::ID);
    }

    /**
     * Setter for Id.
     *
     * @param string|null $id
     *
     * @return void
     */
    public function setId(?string $id): void
    {
        $this->setData(self::ID, $id);
    }

    /**
     * Getter for Event.
     *
     * @return string|null
     */
    public function getEvent(): ?string
    {
        return $this->getData(self::EVENT);
    }

    /**
     * Setter for Event.
     *
     * @param string|null $event
     *
     * @return void
     */
    public function setEvent(?string $event): void
    {
        $this->setData(self::EVENT, $event);
    }

    /**
     * Getter for Text.
     *
     * @return string|null
     */
    public function getText(): ?string
    {
        return $this->getData(self::TEXT);
    }

    /**
     * Setter for Text.
     *
     * @param string|null $text
     *
     * @return void
     */
    public function setText(?string $text): void
    {
        $this->setData(self::TEXT, $text);
    }

    /**
     * Getter for Blocks.
     *
     * @return int|null
     */
    public function getFields(): ?int
    {
        return $this->getData(self::BLOCKS) === null ? null
            : (int)$this->getData(self::BLOCKS);
    }

    /**
     * Setter for Blocks.
     *
     * @param array|null $fields
     *
     * @return void
     */
    public function setFields(?array $fields): void
    {
        $this->setData(self::BLOCKS, $fields);
    }
}

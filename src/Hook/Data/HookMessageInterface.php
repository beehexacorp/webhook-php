<?php
/*
 * Copyright © 2022 Beehexa All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Beehexa\WebhookPhp\Hook\Data;

interface HookMessageInterface
{
    /**
     * String constants for property names
     */
    const ENTITY_ID     = "id";
    const EVENT  = "event";
    const TEXT   = "text";
    const FIELDS = "fields";

    /**
     * Getter for Id.
     *
     * @return string|null
     */
    public function getEntityId(): ?string;

    /**
     * Setter for Id.
     *
     * @param string|null $id
     *
     * @return void
     */
    public function setEntityId(?string $id): void;

    /**
     * Getter for Event.
     *
     * @return string|null
     */
    public function getEvent(): ?string;

    /**
     * Setter for Event.
     *
     * @param string|null $event
     *
     * @return void
     */
    public function setEvent(?string $event): void;

    /**
     * Getter for Text.
     *
     * @return string|null
     */
    public function getText(): ?string;

    /**
     * Setter for Text.
     *
     * @param string|null $text
     *
     * @return void
     */
    public function setText(?string $text): void;

    /**
     * Getter for Fields.
     *
     * @return MessageFieldInterface[]|null
     */
    public function getFields(): ?array;

    /**
     * Setter for Fields.
     *
     * @param MessageFieldInterface[]|null $fields
     *
     * @return void
     */
    public function setFields(?array $fields): void;
}

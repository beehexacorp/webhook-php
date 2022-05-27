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
    const ID     = "id";
    const EVENT  = "event";
    const TEXT   = "text";
    const BLOCKS = "blocks";

    /**
     * Getter for Id.
     *
     * @return string|null
     */
    public function getId(): ?string;

    /**
     * Setter for Id.
     *
     * @param string|null $id
     *
     * @return void
     */
    public function setId(?string $id): void;

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
    public function getFields(): ?int;

    /**
     * Setter for Fields.
     *
     * @param MessageFieldInterface[]|null $fields
     *
     * @return void
     */
    public function setFields(?array $fields): void;
}

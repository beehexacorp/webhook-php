<?php
/*
 * Copyright © 2022 Beehexa All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Beehexa\WebhookPhp\Hook\Data;

interface MessageFieldInterface
{
    /**
     * String constants for property names
     */
    const FIELD = "field";
    const VALUE = "value";

    /**
     * Getter for Field.
     *
     * @return string|null
     */
    public function getField(): ?string;

    /**
     * Setter for Field.
     *
     * @param string|null $field
     *
     * @return void
     */
    public function setField(?string $field): void;

    /**
     * Getter for Value.
     *
     * @return string|null
     */
    public function getValue(): ?string;

    /**
     * Setter for Value.
     *
     * @param string|null $value
     *
     * @return void
     */
    public function setValue(?string $value): void;
}

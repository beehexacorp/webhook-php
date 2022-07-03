<?php
/*
 * Copyright © 2022 Beehexa All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Beehexa\WebhookPhp\Hook\Data;

interface MessageFieldInterface extends \JsonSerializable
{
    /**
     * String constants for property names
     */
    const FIELD_NAME = "name";
    const VALUE = "value";

    /**
     * Getter for Name.
     *
     * @return string|null
     */
    public function getName(): ?string;

    /**
     * Setter for Name.
     *
     * @param string|null $name
     *
     * @return void
     */
    public function setName(?string $name): void;

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

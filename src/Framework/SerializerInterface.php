<?php
/*
 * Copyright © 2022 Beehexa All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Beehexa\WebhookPhp\Framework;

/**
 * Interface for serializing
 *
 * @api
 */
interface SerializerInterface
{
    /**
     * Serialize data into string
     *
     * @param string|int|float|bool|array|null $data
     * @return string|bool
     * @throws \InvalidArgumentException
     * @since 101.0.0
     */
    public function serialize($data);

    /**
     * Unserialize the given string
     *
     * @param string $string
     * @return string|int|float|bool|array|null
     * @throws \InvalidArgumentException
     * @since 101.0.0
     */
    public function unserialize($string);
}

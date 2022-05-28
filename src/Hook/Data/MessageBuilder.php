<?php
/*
 * Copyright © 2022 Beehexa All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Beehexa\WebhookPhp\Hook\Data;

class MessageBuilder
{
    /**
     * @var string[]
     */
    protected $fields = [];

    /**
     * @var string
     */
    protected $id;

    /**
     * @var string
     */
    protected $message;

    /**
     * @param string $id
     * @return void
     */
    public function setEntityId(string $id)
    {
        $this->id = $id;
    }

    /**
     * @param string $message
     * @return void
     */
    public function setText(string $message)
    {
        $this->message = $message;
    }

    /**
     * @param string $name
     * @param string $value
     * @return void
     */
    public function addField(string $name,string $value)
    {
        $this->fields[$name] = $value;
    }

    /**
     * @return HookMessageInterface
     */
    public function build()
    {
        $message = new \Beehexa\WebhookPhp\Hook\Data\HookMessage();
        $message->setText($this->message);
        $message->setEntityId($this->id);
        $fields = [];
        if (!empty($this->fields)) {
            foreach ($this->fields as $name => $value) {
                $fields[] = new \Beehexa\WebhookPhp\Hook\Data\MessageField([
                    'name'  => $name,
                    'value' => $value,
                ]);

            }
            $message->setFields($fields);
        }
        return $message;
    }
}

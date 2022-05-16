<?php

namespace Nhivonfq\Unlock\Decorator;

class DecoratorEmailNotification extends SendNotificationDecorator
{

    /**
     * @param string $title
     * @param string $message
     * @return string
     */
    public function sendMessage(string $title, string $message): string
    {
        return "Email: " . parent::sendMessage($title, $message);
    }
}

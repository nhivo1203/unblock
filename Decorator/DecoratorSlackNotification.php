<?php

namespace Nhivonfq\Unlock\Decorator;

class DecoratorSlackNotification extends SendNotificationDecorator
{
    /**
     * @param string $title
     * @param string $message
     * @return string
     */
    public function sendMessage(string $title, string $message): string
    {
        return "Slack: " . parent::sendMessage($title, $message);
    }
}

<?php

namespace Nhivonfq\Unlock\Decorator;

class DecoratorSendNotification implements DecoratorNotificationInterface
{
    /**
     * @param string $title
     * @param string $message
     * @return string
     */
    public function sendMessage(string $title, string $message):string {
        return "Send a Notification with Title: " . $title . " Message: " . $message;
    }
}

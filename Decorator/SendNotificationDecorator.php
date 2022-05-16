<?php

namespace Nhivonfq\Unlock\Decorator;

class SendNotificationDecorator implements DecoratorNotificationInterface{

    /**
     * @var DecoratorNotificationInterface
     */
    protected DecoratorNotificationInterface $notifications;

    /**
     * @param DecoratorNotificationInterface $notifications
     */
    public function __construct(DecoratorNotificationInterface $notifications) {
        $this->notifications = $notifications;
    }

    /**
     * @param string $title
     * @param string $message
     * @return string
     */
    public function sendMessage(string $title, string $message): string
    {
        return $this->notifications->sendMessage("this is decorator " . $title, $message);
    }
}

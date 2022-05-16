<?php

namespace Nhivonfq\Unlock\Decorator;

interface DecoratorNotificationInterface {
    /**
     * @param string $title
     * @param string $message
     * @return string
     */
    public function sendMessage(string $title,string $message ):string;
}

<?php


namespace Nhivonfq\Unlock\Adapter;

interface NotificationInterface
{
    /**
     * @param string $title
     * @param string $message
     * @return mixed
     */
    public function send(string $title, string $message);
}

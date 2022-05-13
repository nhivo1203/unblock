<?php

namespace Nhivonfq\Unlock\Adapter;

class EmailNotification implements NotificationInterface
{
    /**
     * @var string
     */
    private $adminEmail;

    /**
     * @param string $adminEmail
     */
    public function __construct(string $adminEmail)
    {
        $this->adminEmail = $adminEmail;
    }

    /**
     * @param string $title
     * @param string $message
     * @return void
     */
    public function send(string $title, string $message): void
    {
        mail($this->adminEmail, $title, $message);
        echo "Sent email with title '$title' to '{$this->adminEmail}' that says '$message'.";
    }
}

<?php

namespace Nhivonfq\Unlock\Adapter;

class SlackApi
{
    /**
     * @var string
     */
    private $login;
    /**
     * @var string
     */
    private $apiKey;

    /**
     * @param string $login
     * @param string $apiKey
     */
    public function __construct(string $login, string $apiKey)
    {
        $this->login = $login;
        $this->apiKey = $apiKey;
    }

    /**
     * @return void
     */
    public function logIn(): void
    {
        echo "Logged in to a slack account '{$this->login}'.\n";
    }

    /**
     * @param string $chatId
     * @param string $message
     * @return void
     */
    public function sendMessage(string $chatId, string $message): void
    {
        echo "Posted following message into the '$chatId' chat: '$message'.\n";
    }
}

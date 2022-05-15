<?php

namespace Nhivonfq\Unlock\Adapter;

class SlackNotification implements NotificationInterface
{
    /**
     * @var SlackApi
     */
    private SlackApi $slack;
    /**
     * @var string
     */
    private string $chatId;

    /**
     * @param SlackApi $slack
     * @param string $chatId
     */
    public function __construct(SlackApi $slack, string $chatId)
    {
        $this->slack = $slack;
        $this->chatId = $chatId;
    }

    /**
     * @param string $title
     * @param string $message
     * @return void
     */
    public function send(string $title, string $message)
    {
        $slackMessage = "#" . $title . "# " . strip_tags($message);
        $this->slack->logIn();
        $this->slack->sendMessage($this->chatId, $slackMessage);
    }
}

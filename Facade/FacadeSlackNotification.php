<?php

namespace Nhivonfq\Unlock\Facade;

class FacadeSlackNotification
{
    /**
     * @param string $title
     * @param string $message
     * @return string
     */
    public function sendSlackNotification(string $title, string $message): string
    {
        return "Slack sent with title: $title and message: $message";
    }

    /**
     * @param string $slackID
     * @return string
     */
    public function deleteSlackNotification(string $slackID): string
    {
        return "Deleted email with ID: $slackID";
    }
}

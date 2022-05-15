<?php

namespace Nhivonfq\Unlock\Facade;

class FacadeSlackNotification
{
    public function sendSlackNotification (string $title,string $message) {
        return "Slack sent with title: $title and message: $message";
    }

    public function deleteSlackNotification ($slacknotificationID) {
        return "Deleted email with ID: $slacknotificationID";
    }
}
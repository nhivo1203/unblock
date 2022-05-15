<?php

namespace Nhivonfq\Unlock\Facade;

class FacadeEmailNotification
{
    public function sendEmail (string $title,string $message) {
        return "Email sent with title: $title and message: $message";
    }

    public function deleteEmail ($emailID) {
        return "Deleted email with ID: $emailID";
    }
}
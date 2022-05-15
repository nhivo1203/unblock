<?php

namespace Nhivonfq\Unlock\Facade;

class FacadeEmailNotification
{
    /**
     * @param string $title
     * @param string $message
     * @return string
     */
    public function sendEmail(string $title, string $message): string
    {
        return "Email sent with title: $title and message: $message";
    }

    /**
     * @param $emailID
     * @return string
     */

    public function deleteEmail($emailID): string
    {
        return "Deleted email with ID: $emailID";
    }
}

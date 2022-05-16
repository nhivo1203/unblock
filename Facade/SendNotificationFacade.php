<?php

namespace Nhivonfq\Unlock\Facade;


class SendNotificationFacade
{
    /**
     * @var FacadeEmailNotification
     */
    public FacadeEmailNotification $email;
    /**
     * @var FacadeSlackNotification
     */
    public FacadeSlackNotification $slack;

    public function __construct()
    {
        $this->email = new FacadeEmailNotification;
        $this->slack = new FacadeSlackNotification;
    }

    /**
     * @return string
     */
    public function SendNotification(): string
    {
        return $this->email->sendEmail("Email Title", "Email Message") . "<br>"
            . $this->email->deleteEmail("Email ID") . "<br>"
            . $this->slack->sendSlackNotification("Slack Title", "Slack Message") . "<br>"
            . $this->slack->deleteSlackNotification("Slack ID");
    }
}

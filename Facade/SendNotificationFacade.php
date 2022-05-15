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

    /**
     * @param FacadeEmailNotification $email
     * @param FacadeSlackNotification $slack
     */
    public function __construct(FacadeEmailNotification $email, FacadeSlackNotification $slack)
    {
        $this->email = $email;
        $this->slack = $slack;
    }

    /**
     * @return void
     */
    public function SendNotification(): void
    {
        echo $this->email->sendEmail("Email Title", "Email Message") . "<br>";
        echo $this->email->deleteEmail("Email ID") . "<br>";
        echo $this->slack->sendSlackNotification("Slack Title", "Slack Message") . "<br>";
        echo $this->slack->deleteSlackNotification("Slack ID");
    }
}

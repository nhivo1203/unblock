<?php

namespace Nhivonfq\Unlock\Facade;



class SendNotificationFacade
{
    public FacadeEmailNotification $email;
    public FacadeSlackNotification $slack;

    public function __construct(FacadeEmailNotification $email, FacadeSlackNotification $slack)
    {
        $this->email = $email;
        $this->slack = $slack;
    }

    public function SendNotification() {
        echo $this->email->sendEmail("Email Title", "Email Message"). "<br>";
        echo $this->email->deleteEmail("Email ID"). "<br>";
        echo $this->slack->sendSlackNotification("Slack Title","Slack Message"). "<br>";
        echo $this->slack->deleteSlackNotification("Slack ID");
    }
}
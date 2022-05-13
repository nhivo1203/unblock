<?php

namespace Nhivonfq\Tests\Adapter;

use Nhivonfq\Unlock\Adapter\EmailNotification;
use Nhivonfq\Unlock\Adapter\SlackApi;
use Nhivonfq\Unlock\Adapter\SlackNotification;
use PHPUnit\Framework\TestCase;

class AdapterTest extends TestCase
{

    public function testSendEmail()
    {
        $emailnotification = new EmailNotification("developers@example.com");

        $send = $emailnotification->send("Website is down!", "Our website is not responding. Call admins and bring it up!");

        $expected = "Sent email with title 'Website is down!' to 'developers@example.com' that says 'Our website is not responding. Call admins and bring it up!'.";

        $this->assertEquals($expected, $send);
    }

//    public function testSendSlackNotification()
//    {
//        $slackApi = new SlackApi("example.com", "XXXXXXXX");
//        $slacknotification = new SlackNotification($slackApi, "Example.com Developers");
//
//        $send = $slacknotification->send("Website is down!" , "Our website is not responding. Call admins and bring it up!");
//
//        $expected = "Logged in to a slack account 'example.com'. Posted following message into the 'Example.com Developers' chat: '#Website is down!# Our website is not responding. Call admins and bring it up!'. ";
//
//        $this->assertEquals($expected, $send);
//
//    }
}

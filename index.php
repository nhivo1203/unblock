<?php

use Nhivonfq\Unlock\Adapter\EmailNotification;
use Nhivonfq\Unlock\Adapter\NotificationInterface;
use Nhivonfq\Unlock\Adapter\SlackApi;
use Nhivonfq\Unlock\Adapter\SlackNotification;
use Nhivonfq\Unlock\Core\Application;

require_once __DIR__ . '/vendor/autoload.php';


$app = new Application(__DIR__);

$app->router->get('/', 'home');

$app->router->get('/contact', 'contact');

$app->router->post('/contact', function() {
    return 'handling submitted data';
});

$app->run();


/**
 * @param NotificationInterface $notification
 * @return string
 */

function clientCode(NotificationInterface $notification)
{

    return $notification->send("Website is down!",
        "Our website is not responding. Call admins and bring it up!");

}

echo "Client code is designed correctly and works with email notifications:" . "<br>";
$notification = new EmailNotification("developers@example.com");
echo clientCode($notification);
echo "<br>";


echo "The same client code can work with other classes via adapter: " . "<br>";
$slackApi = new SlackApi("example.com", "XXXXXXXX");
$notification = new SlackNotification($slackApi, "Example.com Developers");
echo clientCode($notification);

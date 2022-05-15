<?php

use Nhivonfq\Unlock\Adapter\EmailNotification;
use Nhivonfq\Unlock\Adapter\NotificationInterface;
use Nhivonfq\Unlock\Adapter\SlackApi;
use Nhivonfq\Unlock\Adapter\SlackNotification;
use Nhivonfq\Unlock\Facade\FacadeEmailNotification;
use Nhivonfq\Unlock\Facade\FacadeSlackNotification;
use Nhivonfq\Unlock\Facade\SendNotificationFacade;
use Nhivonfq\Unlock\Core\Application;

require_once __DIR__ . '/vendor/autoload.php';


$app = new Application();

$email = new FacadeEmailNotification;
$slack = new FacadeSlackNotification;
$facade = new SendNotificationFacade($email, $slack);

$facade->SendNotification();


$app = new Application(__DIR__);

$app->router->get('/', 'home');

$app->router->get('/contact', 'contact');

$app->router->post('/contact', function() {
    return 'handling submitted data';
});

$app->run();




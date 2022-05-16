<?php

namespace Nhivonfq\Unlock\Decorator;

/**
 * @param DecoratorNotificationInterface $notification
 * @return string
 */
function clientCode(DecoratorNotificationInterface $notification): string
{
    return "RESULT: " . $notification->sendMessage("Title", "Message") . "<br>";
}

/**
 * @var DecoratorSendNotification
 */

$notification = new DecoratorSendNotification();
/**
 * @var DecoratorEmailNotification
 */

$email = new DecoratorEmailNotification($notification);
/**
 * @var DecoratorSlackNotification
 */
$slack = new DecoratorSlackNotification($email);

echo clientCode($notification);
echo clientCode($email);
echo clientCode($slack);

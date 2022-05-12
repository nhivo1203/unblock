<?php
require_once __DIR__ . '/vendor/autoload.php';

use app\Core\Application;

$app = new Application(__DIR__);

$app->router->get('/', 'home');

$app->router->get('/contact', 'contact');

$app->router->post('/contact', function() {
    return 'handling submitted data';
});

$app->run();

?>

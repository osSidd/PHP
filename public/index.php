<?php

include(__DIR__.'/../vendor/autoload.php');
use app\core\Application;
use app\controllers;

$app = new Application(dirname(__DIR__));

$app->router->get('/', 'home');
$app->router->get('/contact', 'contact');
$app->router->post('/contact', function(){return "Handling submitted data";});

$app->run();

// 1. composer init
// 2. composer auto_load and give a name space for the app
// 3. include the autoload.php file in root
// 4. Add namespace to all files 
// 5. Use file by using proper namespace
<?php

session_start();

require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
//require '../configs/'.strtolower(APPLICATION_ENV).'.config.php';
require $_SERVER['DOCUMENT_ROOT'] . "/lib/function.php";


$config['displayErrorDetails'] = true;
$config['addContentLengthHeader'] = false;


$app = new \Slim\App(["settings" => $config]);
$container = $app->getContainer();

//зависимости
//require_once $_SERVER['DOCUMENT_ROOT'] . "/dependences/dependences.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/dependences/dependences (2).php";

//мидлвэйр
require_once $_SERVER['DOCUMENT_ROOT'] . "/middleware/middleware.php";


//unset($app->getContainer()['errorHandler']);
//unset($app->getContainer()['phpErrorHandler']);

// Automatically load router files
$routers = glob('../routers/*.router.php');
foreach ($routers as $router) {
    require $router;
}


$app->run();

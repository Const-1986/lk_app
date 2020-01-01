<?php

$container['view'] = function ($container) {
  return new \Slim\Views\PhpRenderer($_SERVER['DOCUMENT_ROOT'] . "/templates/", [] , 'layout.php');

};

//необходим для работы Cartalyst\Sentinel
$container['capsule'] = function ($container){

  $capsule = new Illuminate\Database\Capsule\Manager;

  $capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'energolk',
    //'database'  => 'rbac',
    'username'  => 'mysql',
    'password'  => 'mysql',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
  ]);

  $capsule->bootEloquent();

  return $capsule;

};


$container['sentinel'] = function ($container) {

  $sentinel = Cartalyst\Sentinel\Native\Facades\Sentinel::instance();

  $capsule = $container->capsule;

  $sentinel::getUserRepository()->setModel('models\eloquent_models\customEloquentUsers');
  $sentinel::getPersistenceRepository()->setUsersModel('models\eloquent_models\customEloquentUsers');

  return $sentinel;

};


//$container['mail'] = function($container){
//  //правильнее создать класс обертку, и уже через него загружать в контейнер почтовый клиент
//  $mail = new PHPMailer\PHPMailer\PHPMailer(true);
//  $mail->setLanguage('ru');
//  return $mail;
//
//};


$container['mail'] = function ($container){

  $mail = new \lib\Mailer();
  return $mail;
};



//обработчик неверного роута
$container['notFoundHandler'] = function($container){

  return function ($request, $response) use ($container) {
    // return $container['response']->withStatus(500)
    //                      ->withHeader('Content-Type', 'text/html')
    //                      ->write('asdasdasdadasdasd!');
    $container->view->setLayout('layout_404.php');
    return $container->view->render($container['response'], '404.php', [] );

  };

};




//мой обработчк  ошибок
//$container['errorHandler'] = function($container){
//
//  return function($request,$response,$e) use ($container) {
//
//    $arr = [
//      'e' => $e,
//      'text' => 'обработчик errorHandler',
//    ];
//
//    $container->view->setLayout('layout_404.php');
//    return $container->view->render($container['response'], 'exeption.php', $arr );
//  };
//
//};

//мой обработчк ошибок
//$container['phpErrorHandler'] = function($container){
//
//  return function($request,$response,$e)use($container) {
//
//    $arr = [
//      'e' => $e,
//      'text' => 'обработчик phpErrorHandler',
//    ];
//
//    $container->view->setLayout('layout_404.php');
//    return $container->view->render($container['response'], 'exeption.php', $arr );
//  };
//
//};


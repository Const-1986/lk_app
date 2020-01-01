<?php

$app->get('/test', function ($request, $response) {

  $cObj = new \controllers\TestController($request, $response, $this);

  $result = $cObj->checkAccess() ? $cObj->test() : $cObj->redirect('/');
  return $result;

});

//тетсовая отправка почты
$app->get('/test/mail', function ($request, $response) {

  $cObj = new \controllers\TestController($request, $response, $this);

  $result = $cObj->checkAccess() ? $cObj->mail() : $cObj->redirect('/');
  return $result;

});


//контролер обрабатывающий загрузку улиц по апи кладр в форму
$app->get('/test/tocladrform', function($request, $response){


  return (new \controllers\TestController($request, $response, $this))->defRender('cladrform.php');

});


//роут который реализует динамическую подгрузку данных из КЛАДР в динамичеескую форму
$app->post('/test/tocladrform', function($request, $response){

  return(new \controllers\TestController($request, $response, $this))->tocladrform();


});

//тестовый роут для выгрузки всего JSON о видах экономической деятельности.
//и алгоритм получения из подстроки по диапазону позиций строки
$app->post('/test/writeToFile', function($request, $response){
  //return(new \controllers\TestController($request, $response, $this))->writeToFile();

});

//роут тестовой обработки поиска по буквам на отдельном шаблоне
$app->get('/test/searchByLetters', function($request, $response){

  return(new \controllers\TestController($request, $response, $this))->searchByLetters();

});

$app->post('/test/searchByLetters', function($request, $response){

  return(new \controllers\TestController($request, $response, $this))->searchByLetters();

});

// тетсовая загрузка файлов на сервер
$app->get('/test/testsendfile', function($request, $response){

  return(new \controllers\TestController($request, $response, $this))->testsendfile();
});

$app->post('/test/testsendfile', function($request, $response){

  return(new \controllers\TestController($request, $response, $this))->testsendfile();
});

//Поиск по базе КЛАДР улиц по ID
$app->get('/test/searchAdress', function($request, $response){

  //return(new \controllers\TestController($request, $response, $this))->searchAdress();
  
});


//правило доступа из мидлвэйра
//->add($middleware_access_all);


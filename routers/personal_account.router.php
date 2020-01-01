<?php


$app->get('/personal-account', function ($request, $response) {

  $this->view->render($response, '/personal-account/personal_account.php', []);
});


$app->get('/personal-account/questionnaire', function ($request, $response) {

  $this->view->render($response, '/personal-account/questionnaire.php', []);
});

$app->post('/personal-account/questionnaire', function ($request, $response) {



  $this->view->render($response, '/personal-account/questionnaire.php', []);
});


// !!!---Роуты обработчик заявки на технологическое присоединение---!!!

$app->get('/personal-account/application', function ($request, $response) {

  return (new \controllers\ApplicationController($request, $response, $this))->defRender('/personal-account/application.php');

  //$this->view->render($response, '/personal-account/test.php', []);
});

// !!!---Роуты обработчик заявки на технологическое присоединение---!!!
$app->post('/personal-account/application', function ($request, $response) {

  return (new \controllers\ApplicationController($request, $response, $this))->test();
  //return $result = $cObj->checkAccess() ? $cObj->test() :  $cObj->redirect('/');
  //$cObj->test();

  //$this->view->render($response, '/personal-account/application.php', []);
});

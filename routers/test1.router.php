<?php

$app->get('/test1',function($request,$response) {


  $this->view->render($response, 'test1.php');

  //return $response->withRedirect('/', 301);

});
//->add($middleware_access_all);
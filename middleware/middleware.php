<?php

//$middleware_access = function ($request, $response, $next){
//    //$authorized = true;
//    //if (true){
//    //вывожу страницу с регистрацией и авторизацией
//    //$response->getBody()->write('тадададам!');
//    $next($request,$response);
//    return $response;
////  }
//
//};

$middleware_access_all = function ($request, $response, $next){
  if (true){
    $next($request,$response);
    return $response;
  }else{
    return $response->withRedirect('/registration', 301);
    //return $response;
  }
};

//$app->add(function ($request, $response, $next) {
// обязательно возвращать
//  $next($request,$response);
//  return $response;
//});


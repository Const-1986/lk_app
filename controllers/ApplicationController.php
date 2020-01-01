<?php


namespace controllers;


class ApplicationController extends AppController{

  public function test(){

    if(!$this->checkAccess()){
      echo 'Доступ запрещен';
      exit;
    }

    //debug($_POST);

    $_SESSION['statement']['step1'] = $_POST;

    debug($_SESSION);

    exit;
  }

}
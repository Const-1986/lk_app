<?php

namespace controllers;

class appController{

    protected $request;
    protected $response;
    protected $container;
    protected $args;

    public function __construct($request,$response,$container, $args = null ){

        $this->request = $request;
        $this->response = $response;
        $this->container = $container;
        $this->args = $args;

    }

    public function checkAccess(){

      //проверяем с помощью сентинел
      if ($user = $this->container->sentinel::check()){
        return true;
      }else{
        return false;
      }

    }

    public function redirect($url){
      return $this->response->withRedirect($url, 301);
    }

	public function defRender($layout){

		return $this->container->view->render($this->response, $layout, []);
	}


}


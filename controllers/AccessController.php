<?php

namespace controllers;


class AccessController extends AppController{

    protected $request;
    protected $response;
    protected $container;
    protected $args;

    public function __construct($request,$response,$container, $args = null ){
        parent::__construct($request,$response,$container, $args);

    }


    public function registration(){

			$post = $this->request->getParsedBody();


			$email = $post['email'];
			$credentials = [
				'login' => $post['login'],
				'email' => $post['email'],
				'first_name' => $post['name'],
				'last_name' => $post['surname'],
				'password' => $post['password']
			];
			//валидация сделать

			try{
				if($u = $this->container->sentinel::findByCredentials($credentials)){
					echo 'Такой логин уже есть';
					exit;
				}else{
					$this->container->sentinel::registerAndActivate($credentials);
					return $this->response->withRedirect('/', 301);
				}

			}catch( \InvalidArgumentException $e){
				debug($e);
				exit;
			}

			exit;
        
    }

    public function authentication(){

			$post = $this->request->getParsedBody();

			$credentials = [

				//'login' => $post['login'],
				'email' => $post['email'],
				'password' => $post['password']
			];

			$userObj =  $this->container->sentinel::findByCredentials($credentials);
			
			//получили объект persistense
			$persistencesObj  = $userObj->persistences();
			
			//возвращает совпадения usera у которого кука связанна с сессией, и id сессии записан в базу
			$result = $persistencesObj->getResults();

			if($result->isEmpty()){
				//если нет совпадений - то делаем аутентификацию и создается новая сессия
				if($userObj = $this->container->sentinel::authenticate($credentials)){
					return $this->response->withRedirect('/', 301);
					exit;
				}else{
					echo 'В доступе отказано, повторите попытку';
					exit;
				}
			}else{
				//если есть совпадения - то 
				//удаляем все сессии этого пользователя в базе
				//$result = \Cartalyst\Sentinel\Persistences\EloquentPersistence::where('user_id', $userObj->id);
				$result = \Cartalyst\Sentinel\Persistences\EloquentPersistence::where('user_id', $userObj->id)->delete();
				//debug($result);
				//создаем новую сессию
				if($userObj = $this->container->sentinel::authenticate($credentials)){
					return $this->response->withRedirect('/', 301);
					exit;
				}else{
					echo 'В доступе отказано, повторите попытку';
					exit;
				}
			}
		}

		public function logout(){
      //очистить сессию тестовый вариант
      unset($_SESSION['statement']);
      unset($_SESSION['step1']);
    	$this->container->sentinel::logout();

    	return $this->response->withredirect('/', 301);
		}

}

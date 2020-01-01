<?php


// GET index route
$app->get('/', function ($request, $response){
	debug($_SERVER['REMOTE_ADDR']);
	//debug($_SERVER['REMOTE_HOST']);
	debug($_SERVER['REMOTE_PORT']);
	//debug($_SERVER['REMOTE_USER']);
	debug($_SERVER['HTTP_USER_AGENT']);

	echo 'Сессия<br>';
	debug($_SESSION);


	if($user =$this->sentinel::check()){
		echo 'Данные пользователя';
	  //debug($user);
	}else{
		echo 'Никто не зарегистрирвоан';
	}
	$this->view->setLayout('layout.php');
	$this->view->render($response, 'main.php');
});

$app->post('/', function($request, $response){

});


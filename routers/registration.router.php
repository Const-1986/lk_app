<?php


$app->get('/registration', function ($request, $response) {

	$cObj = new \controllers\AccessController($request, $response, $this);
	return $cObj->defRender('/access/registration.php');
});

$app->post('/registration', function ($request, $response) {

	return (new \controllers\AccessController($request, $response, $this))->registration();
});

$app->get('/authentication', function ($request, $response) {

	$cObj = new \controllers\AccessController($request, $response, $this);
	return $cObj->defRender('/access/authentication.php');
});

$app->post('/authentication', function ($request, $response) {

	$cObj = new \controllers\AccessController($request, $response, $this);
	return $cObj->authentication();
});


$app->get('/logout', function ($request, $response) {

	$cObj = new \controllers\AccessController($request, $response, $this);
	return $cObj->logout();
});

<?php
require 'core/bootstrap.php';

$routes = [
	'/' => 'FormController@index',
	'/add' => 'FormController@add',
];

$db = [
	'name'     => 'test',
	'username' => 'root',
	'password' => '',
];

$router = new Router($routes);
$router->run($_GET['url'] ?? '');
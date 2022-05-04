<?php
require 'core/bootstrap.php';

$pages = [
	new Page('/', 'Home', 'WelcomeController', 'index'),
];

$db = [
	'name'     => 'meinedatenbank',
	'username' => 'root',
	'password' => '',
];

$router = new Router($pages);
$router->run($_GET['url'] ?? '');
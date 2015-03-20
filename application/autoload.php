<?php

$root = $_SERVER['DOCUMENT_ROOT'];

//composer autoload file
require $root . 'vendor/autoload.php';

//start up Slim
$app = new \Slim\Slim(array(
	'view'			=> new \Slim\Views\Twig(),	
));

//require our routes file 
require $root . 'application/routes.php';
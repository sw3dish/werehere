<?php
session_start();
ini_set('session.cookie_httponly', 1);


define('ROOT',$_SERVER['DOCUMENT_ROOT']);

//composer autoload file
require_once ROOT . 'vendor/autoload.php';

require_once ROOT . 'framework/functions/functions.php';
require_once ROOT . 'framework/models/utility.php';

$utility = new \slimlocal\models\utility();
//get all the files in framework/models 
\slimlocal\models\utility::include_all_files_in_directory(ROOT . "framework/models");


//start up Slim
$app = new \Slim\Slim(array(
	'view'				=> new \Slim\Views\Twig(),
	'templates.path' 	=> ROOT . 'application/templates'
));

//require our routes file 
require ROOT . 'application/routes.php';

$app->run();
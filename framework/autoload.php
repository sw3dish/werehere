<?php
	session_start();
	$final_global_template_vars = array();
	ini_set('session.cookie_httponly', 1);


	define('ROOT',$_SERVER['DOCUMENT_ROOT']);
	define('APP_ROOT', ROOT . 'application/');

	//composer autoload file
	require_once ROOT . 'vendor/autoload.php';

	require_once ROOT . 'framework/functions/functions.php';
	require_once ROOT . 'framework/models/utility.php';

	$utility = new \slimlocal\models\utility();
	//get all the files in framework/models 
	\slimlocal\models\utility::include_all_files_in_directory(ROOT . "framework/models");

	//get core settings - default settings that propogate across all sites
	require_once ROOT . "framework/settings/settings.php";
	$final_global_template_vars = array_merge($final_global_template_vars, $default_core_settings);

	//include all of the controller functions
  	\slimlocal\models\utility::include_all_files_in_directory(APP_ROOT . '/controllers',true);


	//start up Slim
	$app = new \Slim\Slim(array(
		'view'				=> new \Slim\Views\Twig(),
		'templates.path' 	=> ROOT . 'application/templates'
	));

	//require our routes file 
	require ROOT . 'application/routes.php';

	$app->run();
?>
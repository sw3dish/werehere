<?php
function show_home(){
	$app = \Slim\Slim::getInstance();
	$env = $app->environment();
	global $final_global_template_vars;
	$db_conn = new \slimlocal\models\db($final_global_template_vars["db_connection"]);
	$db_resource = $db_conn->get_resource();
	$app->render('home.php', array(
	
	));
}
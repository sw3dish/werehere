<?php

//home route
$app->get('/', function() use ($app) {
	return $app->render('home.php', array(
	
	));
});

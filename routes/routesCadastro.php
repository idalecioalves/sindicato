<?php 

$app->get('/cadastro', $authenticate($app), function () use ($app) {    
	$app->render("cadastro.php");
});
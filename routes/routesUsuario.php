<?php
$app->get('/usuario', function () use ($app) {
	$app->render("cadastroUsuario.php");
});
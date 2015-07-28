<?php
$app->get('/usuario/cadastro', function () use ($app) {
	$app->render("cadastroUsuario.php");
});

$app->post('/usuario/cadastro',function() use ($app){
	
	//pega valores do form
	$nome = $app->request->post('nome'); //ok
	$email =$app->request->post('email'); //ok
	$senha = $app->request->post('senha'); //ok    
	$repsenha = $app->request->post('repsenha'); //ok
	$nivel = $app->request->post('nivel'); //ok

	//validando a senha e confirma senha
	if ($senha!=$repsenha)
	{
		$app->flash('error', 'As senhas não são iguais!.');
		$app->redirect(baseUrl().'/usuario/cadastro');
	}
	if(!filter_var($email,FILTER_VALIDATE_EMAIL))
	{
		$app->flash('error', 'email invalido!.');
		$app->redirect(baseUrl().'/usuario/cadastro');
	}

	$data = array(
	'name'=> $nome, //name referente ao banco;
	'email'=>$email,//email referente ao banco;
	'password'=>$senha,//password referente ao banco;
	'type_id'=>$nivel,
	);	


	//salva os registo no banco
	$app->banco->usuario->insert($data);
	$app->flash('success', 'Registro inserido com suscesso.');
	//$data['lista']=$app->banco->comunidade->order('id desc');
	//$app->view->setData($data);
	$app->redirect(baseUrl().'/usuario/cadastro');

});




		
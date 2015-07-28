<?php

$app->group('/usuario', function () use ($app)
{	
	$app->get('/lista', function () use ($app)
	{	
		$flash = $app->view()->getData('flash');	

		if(isset($flash['email']))
		{	
			$data['email_value'] = $flash['email'];			
		}
		if(isset($flash['nome']))
		{	
			$data['nome_value'] = $flash['nome'];			
		}
		if(isset($flash['nivel']))
		{	
			$data['nivel_value'] = $flash['nivel'];			
		}
		if(isset($flash['errors']['password_confirm']))
		{	
			$data['errors'][] = $flash['errors']['password_confirm'];			
		}
		if(isset($flash['errors']['error_email']))
		{	
			$data['errors'][] = $flash['errors']['error_email'];			
		}		
		$data['lista'] = $app->banco->usuario->order('id desc');
		$data['nivel'] = [1=>'Administrador',2=>'usuário'];
		$app->render("cadastroUsuario.php",$data);
	});

	$app->post('/lista', function () use ($app) 
	{
		$errors = array();

		$nome = $app->request->post('nome'); 
		$email =$app->request->post('email');
		$senha = $app->request->post('senha'); 
		$repsenha = $app->request->post('repsenha'); 
		$nivel = $app->request->post('nivel'); 		

		if(!filter_var($email,FILTER_VALIDATE_EMAIL))
		{		 
			$errors['error_email'] = "As senhas não são iguais!.";	
		}

		if ($senha!=$repsenha)
		{
			$errors['password_confirm'] = "As senhas não são iguais!.";						
		}

	/**
	 * para implementar
	 * rotina valiada se o emeil ja foi cadastrado
	 ******************************************************/

	if (count($errors) > 0)
	{
		$app->flash('nome', $nome);
		$app->flash('email', $email);
		$app->flash('nivel', $nivel);
		$app->flash('errors', $errors);
		$app->redirect(baseUrl().'/usuario/lista');
	}

	$data = array(
		'name'=> $nome, 
		'email'=>$email,
		'password'=>$senha,
		'type_id'=>$nivel,
		);	


	//$app->banco->usuario->insert($data);
	$app->flash('success', 'Registro inserido com suscesso.');
	//$data['lista']=$app->banco->comunidade->order('id desc');
	//$app->view->setData($data);
	$app->redirect(baseUrl().'/usuario/lista');

});

$app->get('/edita/:id', function ($id) use ($app) {});
$app->post('/edita/:id', function ($id) use ($app) {});
$app->get('/delete/:id', function ($id) use ($app) {});


});


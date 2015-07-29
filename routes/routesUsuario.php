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

		$flag = $app->banco->usuario()->where('email',$email)->count();
		if($flag>=1)
		{
			$errors['error_email'] = "Este emial já enconta-se cadastrato";			
		}

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

		$flag = $app->banco->usuario->insert($data);
		if (is_null($flag)) {
			$app->redirect(baseUrl().'/usuario/lista');
		}			
		$data['lista'] = $app->banco->usuario->order('id desc');
		$data['nivel'] = [1=>'Administrador',2=>'usuário'];
		$data['flash']['success'] = 'Registro inserido com suscesso.';				
		$app->render("cadastroUsuario.php",$data);		
	});

$app->get('/edita/:id', function ($id) use ($app) {
	$data['lista']=$app->banco->usuario->order('id desc');
	$com = $app->banco->usuario()->where('id',$id)->fetch();
	if($com)
	{
		$data['nome_value'] = $com['name'];
		$data['email_value'] = $com['email'];
		$data['nivel_value'] = $com['type_id'];
	}
	else
	{
		$app->flash('info', 'Registro não existe.');
		$app->redirect(baseUrl().'/usuario/lista');
	}
	$data['nivel'] = [1=>'Administrador',2=>'usuário'];
	$app->render("cadastroUsuario.php",$data);
});
$app->post('/edita/:id', function ($id) use ($app) {});
$app->get('/delete/:id', function ($id) use ($app) {});


});


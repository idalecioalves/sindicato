<?php
$app->get("/login", function () use ($app)
{
	$flash = $app->view()->getData('flash');	
	$urlRedirect = baseUrl().$app->config['home'];	
	if (isset( $_SESSION['user']))
	{
		$app->redirect(baseUrl().$app->config['home']);
	}			
	if (isset($_SESSION['urlRedirect'])) 
	{
		$urlRedirect = $_SESSION['urlRedirect'];
	}
	else
	{
		$_SESSION['urlRedirect'] = $urlRedirect;
	}

	$email_value = $email_error = $password_error = $tipo_value = '';
	
	if (isset($flash['email'])) 
	{
		$email_value = $flash['email'];
	}
	if (isset($flash['tipo'])) 
	{
		$tipo_value = $flash['tipo'];
	}

	if (isset($flash['errors']['email']))
	{
		$email_error = $flash['errors']['email'];
	}
	if (isset($flash['errors']['password'])) 
	{
		$password_error = $flash['errors']['password'];
	}
	$app->render('login.php', 
		array(		
			'tipo_value' => $tipo_value, 
			'email_value' => $email_value,
			'email_error' => $email_error, 					
			//'urlRedirect' => $urlRedirect
			)
		);
});

$app->post("/login", function () use ($app)
{
	$email = $app->request()->post('email');
	$password = $app->request()->post('password');
	$tipo = $app->request()->post('tipo');
	$errors = array();

	if(count($app->banco->usuario->where('email=?',$email)->where('password=?',$password))==0)
	{
		$errors['email'] = "Email e senha não corresponde.";		
		$app->flash('email', $email);
		$app->flash('tipo', $tipo);	
	}		

	if (count($errors) > 0)
	{
		$app->flash('errors', $errors);
		$app->redirect(baseUrl().'/login');
	}
	
	$_SESSION['user'] = $email;
	

	if (isset($_SESSION['urlRedirect'])) 
	{
		$tmp = $_SESSION['urlRedirect'];
		unset($_SESSION['urlRedirect']);
		$app->redirect($tmp);
	}
	$app->redirect(baseUrl().$app->config['home']);
});

$app->get("/logout", function () use ($app) {
	unset($_SESSION['user']);
	$app->view()->setData('user', null);
	$app->redirect(baseUrl().'/login');
});
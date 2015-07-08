<?php
ini_set('display_errors',1);
error_reporting( E_ALL | E_STRICT );
session_cache_limiter(false);
session_start();
// MySQL 
$config=array();
$config['db_charset'] 		 = 'utf8'; 
$config['db_host'] 			 = 'localhost';
$config['db_name'] 			 = 'sindicato';	   
$config['db_username']       = 'root';
$config['db_password']       = '';
$config['db_dsn']            = 'mysql:host='.$config['db_host'].';dbname='.$config['db_name'].';'.$config['db_charset'];
$config['db_PDOAttribute']	 = array(
	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
	PDO::MYSQL_ATTR_INIT_COMMAND => 'set names utf8',
	PDO::ERRMODE_WARNING,
	PDO::ATTR_CASE, PDO::CASE_LOWER
	);		
$config['PDO'] 				 = new \PDO($config['db_dsn'],$config['db_username'] ,$config['db_password'],$config['db_PDOAttribute']);

require 'vendor/autoload.php';


$app = new \Slim\Slim();
$app->config(array(
	'debug' => true,
	'templates.path' => 'views',
	));

$app->add(new \Slim\Middleware\SessionCookie(
	array(
		'name'=>'sindicato'
		)
	)
);

$app->container->singleton('banco',function() use($config)
{
	return new NotORM($config['PDO']);
});

$app->get('/', function () {
	echo ( "<br /><br /><br /> <center> Seja bem vindo</center>");
});

$app->get('/login', function () use ($app) {    
	$app->render("login.php");
});

$app->get('/cadastro', function () use ($app) {    
	$app->render("cadastro.php");
});

$app->get('/cadastro', function () use ($app) {    
	$app->render("cadastro.php");
});

//grupo comunidade
$app->group('/comunidade', function () use ($app) {

//lista todas as comunidades
	$app->get('/lista', function () use ($app) {    
		$data['lista']=$app->banco->comunidade->order('id desc');
		$app->render("comunidade.php",$data);
	});

//adiciona comunidade
	$app->post('/lista', function () use ($app) {    
		$nome =	$app->request->post('nome');	
		$app->banco->comunidade->insert(['nome'=>$nome]);
		$app->flash('success', 'Registro inserido com suscesso.');
		$data['lista']=$app->banco->comunidade->order('id desc');
		$app->view->setData($data);
		$app->redirect('/comunidade/lista');
	});


//editar - carregar os dados no formulario para edição
	$app->get('/edita/:id', function ($id) use ($app) {    
		$data['lista']=$app->banco->comunidade->order('id desc');
		$com = $app->banco->comunidade()->where('id',$id)->fetch();		
		if($com)
		{
			$data['campo'] = array('nome'=>$com['nome']);	
		}
		else
		{
			$app->flash('info', 'Registro não existe.');
			$app->redirect('/comunidade/lista');
		}
		$app->render("comunidade.php",$data);	
	});

	$app->post('/edita/:id', function ($id) use ($app) {    
		$nome =	$app->request->post('nome');	
		$com = $app->banco->comunidade()->where('id',$id)->fetch();
		if($com)
		{
			$app->flash('success', 'Registro atualizado com suscesso.');
			$com->update(['nome'=>$nome]);
		}
		else
		{
			$app->flash('error', 'Registro não atualizado.');
		}

		$data['lista']=$app->banco->comunidade->order('id desc');
		$app->view->setData($data);
		$app->redirect('/comunidade/lista');
	});
//deleta o resgistro por id
	$app->get('/delete/:id', function ($id) use ($app) {    
		$com = $app->banco->comunidade()->where('id',$id)->fetch();
		if($com){
			$app->flash('success', 'Registro apagado com suscesso.');
			$com->delete();
		}
		$data['lista']=$app->banco->comunidade->order('id desc');
		$app->view->setData($data);
		$app->redirect('/comunidade/lista');
	});

});

$app->group('/delegacia', function () use ($app) {
//lista todas as delegacias
	$app->get('/lista', function () use ($app) {    
		$data['lista']=$app->banco->delegacia->order('delegaciaId desc');
		$app->render("delegacia.php",$data);		
	});
});








// referente ao ajax do campo select cadastro
$app->get('/comunidade/listajson', function () use ($app)
	{ 	$data = $app->banco->comunidade;
		$app->response()->header('Content-Type', 'application/json;charset=utf-8');
		echo json_encode($data,JSON_PRETTY_PRINT);
	});


$app->run();
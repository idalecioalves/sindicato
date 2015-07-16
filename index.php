
<?php 
ini_set('display_errors',1);
error_reporting( E_ALL | E_STRICT );
session_cache_limiter(false);
session_start();
// MySQL 
$config=array();
$config['db_charset'] 		= 'utf8'; 
$config['db_host'] 			= 'localhost';
$config['db_name'] 			= 'sindicato';	   
$config['db_username']      = 'root';
$config['db_password']      = '';
$config['db_dsn']           = 'mysql:host='.$config['db_host'].';dbname='.$config['db_name'].';'.$config['db_charset'];
$config['db_PDOAttribute']	= array(
	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
	PDO::MYSQL_ATTR_INIT_COMMAND => 'set names utf8',
	PDO::ERRMODE_WARNING,
	PDO::ATTR_CASE, PDO::CASE_LOWER
	);		
$config['PDO'] 				= new \PDO($config['db_dsn'],$config['db_username'] ,$config['db_password'],$config['db_PDOAttribute']);
$config['home']				=  '/cadastro'; 

require 'vendor/autoload.php';

$app = new \Slim\Slim();
$app->config(array(
	'mode' => 'development',
            // Debugging
	'debug' => true,
            // Logging
	'log.writer' => null,
	'log.level' => \Slim\Log::DEBUG,
	'log.enabled' => true,
            // View
	'templates.path' => 'views',
	'view' => '\Slim\View',
            // Cookies
	'cookies.encrypt' => true,
	'cookies.lifetime' => '60 minutes',
	'cookies.path' => '/',
	'cookies.domain' => null,
	'cookies.secure' => true,
	'cookies.httponly' => false,
            // Encryption
	'cookies.secret_key' => sha1('CHANGE_ME'),
	'cookies.cipher' => MCRYPT_RIJNDAEL_256,
	'cookies.cipher_mode' => MCRYPT_MODE_CBC,
            // HTTP
	//'http.version' => '1.1',
            // Routing
	'routes.case_sensitive' => true
	));

$app->add(new \Slim\Middleware\SessionCookie(array('name'=>'sindicato')));
$app->container->singleton('banco',function() use($config)
{
	return new NotORM($config['PDO']);
});
$app->container->singleton('config',function() use($config)
{
	return $config;
});
//########################################## end config #################################

$authenticate = function ($app)
{
	return function () use ($app)
	{
		if (!isset($_SESSION['user']))
		{
			$_SESSION['urlRedirect'] = baseUrl().$app->config['home'];
			$app->flash('error', 'Faça login');
			$app->redirect(baseUrl().'/login');
		}
	};
};


$app->get('/', function () use ($app)
{
	$app->redirect(baseUrl().'/login');
});


//############################### routes login ############################
include('routes/routesCadastro.php');
//############################### routes kogin ############################

//############################### routes login ############################
include('routes/routesLogin.php');
//############################### routes kogin ############################

//############################### routes comunidade ############################
include('routes/routesComunidade.php');
//############################### routes comunidade ############################


$app->group('/delegacia', function () use ($app) {
//lista todas as delegacias
	$app->get('/lista', function () use ($app) {    
		$data['lista']=$app->banco->delegacia->order('id desc');
		$app->render("delegacia.php",$data);		
	});
});

// referente ao ajax do campo select cadastro
$app->get('/comunidade/listajson', function () use ($app)
	{ 	$data = $app->banco->comunidade;
		$app->response()->header('Content-Type', 'application/json;charset=utf-8');
		echo json_encode($data,JSON_PRETTY_PRINT);
	});


// referente ao ajax do campo select cadastro
$app->get('/delegacia/listajson', function () use ($app)
	{ 	$data = $app->banco->delegacia;
		$app->response()->header('Content-Type', 'application/json;charset=utf-8');
		echo json_encode($data,JSON_PRETTY_PRINT);
	});



$app->run();

<?php 

function baseUrl($withUri = true, $appName = 'default')
{
	$req = \Slim\Slim::getInstance($appName)->request();
	$uri = $req->getUrl();

	if ($withUri) {
		$uri .= $req->getRootUri();
	}
	return $uri;
}

function currentUrl($withQueryString = true, $appName = 'default')
{
	$app = \Slim\Slim::getInstance($appName);
	$req = $app->request();
	$uri = $req->getUrl() . $req->getPath();
	if ($withQueryString) {
		$env = $app->environment();
		if ($env['QUERY_STRING']) {
			$uri .= '?' . $env['QUERY_STRING'];
		}
	}
	return $uri;
}

function siteUrl($url, $withUri = true, $appName = 'default')
{
	$req = \Slim\Slim::getInstance($appName)->request();
	$uri = $req->getUrl();
	if ($withUri) {
		$uri .= $req->getRootUri();
	}
	return $uri . '/' . ltrim($url, '/');
}

function urlFor($name, $params = array(), $appName = 'default')
{
	return \slim\Slim::getInstance($appName)->urlFor($name, $params);
}

function selected( $value, $selected ){
    return $value==$selected ? ' selected' : '';
}
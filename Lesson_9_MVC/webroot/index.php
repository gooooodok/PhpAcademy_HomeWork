<?php

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', __DIR__ . DS . '..' . DS);
define('VIEW_DIR', ROOT . 'View' . DS);

spl_autoload_register(function($className) {
	
	$file = ROOT . str_replace('\\', DS, "{$className}.php");

	if (!file_exists($file)){
		throw new \Exception("{$file} not found");
	}

	require_once $file;
});

\Library\Session::start();

$request = new \Library\Request();

$isAdminUrl = strpos($request->getUri(), '/admin') === 0;

if ($isAdminUrl) {
	\Library\Controller::setAdminLayout();
}

$pdo = new \PDO('mysql: host=localhost; dbname=mvs', 'root', '');
$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

$container = new \Library\Container();
$container->set('router', new \Library\Router());
$container->set('repository', (new \Library\RepositoryManager())->setPdo($pdo));

$route = $request->get('route', 'default/index');
$route = explode('/', $route);

$controller = 'Controller\\' . ($isAdminUrl ? 'Admin\\' : '') . ucfirst($route[0]) . 'Controller';

$action = $route[1] . 'Action';

$controller = (new $controller())->setContainer($container);

if (!method_exists($controller, $action)) {
	throw new Exception("{$action} not found");
}

echo $controller->$action($request);
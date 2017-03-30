<?php

$date = date('m.d.y');


require 'function.php';


$page = requestGet('page', 'homepage');
$controllerPath = 'page/' . $page . '.php'; 

if (!file_exists($controllerPath)){
	//http_response_code(404);
	$page = 'error';
	$controllerPath = 'page/' . $page . '.php'; 
}

require $controllerPath;

$template = 'templates/' . $page . '.php';


//$content = require $template;
ob_start();
require $template;
$content = ob_get_clean();


require 'templates/layout.php';

//var_dump(requestGet('page'));

?>
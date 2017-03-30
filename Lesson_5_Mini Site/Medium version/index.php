<?php

$date = date('m.d.y');

require 'include/function.php';

$link = db_connect('localhost', 'root', '', 'mvs');
///////////$res = mysqli_query($link, "SELECT * FROM author"); $author = mysqli_fetch_all($res);

session_start();

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



?>
<?php

function db_connect($host, $user, $pass, $db) {
	$link = @mysqli_connect($host, $user, $pass, $db);

	if (mysqli_connect_errno()) {
		die(mysqli_connect_error());
	}

	return $link;
}

function mysql_get_result($link, $sql) {
        $res = mysqli_query($link, $sql);

        if ($res === false){
        die(mysqli_error($link));
    }

        return $res;

}

function debug($kay) {
    echo"<pre>";
    print_r($kay);
    echo "</per>";
}

define('DATA_FILE', 'messages.txt');
define('FLASH_KEY', 'flash_message');
 

function setFlash($message)
{
    $_SESSION[FLASH_KEY] = $message;
}

function getFlash()
{
    if (!isset($_SESSION[FLASH_KEY])) {
        return null;
    }
    
    $message = $_SESSION[FLASH_KEY];
    unset($_SESSION[FLASH_KEY]);
    
    return $message;
}

function redirect($to)
{
    header("Location: {$to}");
    die;
}

function requestPost($key, $default = null)
{
    return isset($_POST[$key]) ? $_POST[$key] : $default;
}

function requestGet($key, $default = null)
{
    return isset($_GET[$key]) ? $_GET[$key] : $default;
}

function isRequestPost()
{
    return (bool) $_POST;
}

function isFormValid()
{
    return trim(requestPost('username')) != '' && trim(requestPost('email')) != '' && trim(requestPost('message')) != '';
}


?>
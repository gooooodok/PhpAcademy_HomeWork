<?php 

require 'model/book.php';

$id = requestGet('id');

$book = findBookById($link, $id);

if(!$book) {
	die("Book not found");
}

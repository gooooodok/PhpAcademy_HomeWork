<?php

require 'model/book.php';

echo $sortField = requestGet('sort', 'price');
echo $sortOrder = requestGet('order', 'ask');

$books = findAllBooks($link, $sortField, $sortOrder);
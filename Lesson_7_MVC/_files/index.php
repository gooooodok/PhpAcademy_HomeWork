<?php


include 'MyClasses\Test.php';
include 'MyClasses\DateTime.php';


$t = new MyClasses\Test();

echo "<pre>";
var_dump($t);

echo serialize($t->b);
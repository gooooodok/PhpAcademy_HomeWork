<?php

$age = 25;
$weight = 77.34;
$name = "Mike";
$surname = " Johnson";
$canSwim = false;

$info = "His name is {$name}. His surname is {$surname}. He is {$age} years old.";

?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8"/>
   <title>Table</title>
</head>
<body>

<table border="1">
   <tr>
      <th>Name</th>
      <th>Surname</th>
      <th>Age</th>
      <th>Weight</th>
   </tr>

   <tr>   
      <th><?=$name?></th>   
      <th><?=$surname?></th>   
      <th><?=$age?></th>   
      <th><?=$weight?></th>   
   </tr>
</table>

<?php

// notice, warning - предуприждения, не останавливает скрипт.
// parse error - останавливает скрипт. Где то пропущено ; } " и т.д. 
// parse error - останавливает скрипт. синтаксически все правельно, но нету например такой переменной, или функции.

// >, <, <=, >=, ==, ===, !=, !==

$x = (int) "12skjvnj5" + 5 + true;

var_dump($x == 18);

?>

</body>
</html>   
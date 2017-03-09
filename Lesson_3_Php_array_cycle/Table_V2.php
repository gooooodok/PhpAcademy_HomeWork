<?php

$employee1 = array(
   "age" => 61,
   "weight" => 75.35,
   "name" => "Mike",
   "surname" => "Johnson",
   "can_swim" => true
);

$employee2 = array(
   "age" => 34,
   "weight" => 70.35,
   "name" => "Steve",
   "surname" => "Anderson",
   "can_swim" => false
);

$employee3 = array(
   "age" => 43,
   "weight" => 112.35,
   "name" => "Hank",
   "surname" => "Jobbs",
   "can_swim" => false
);

$employees = array($employee1, $employee2, $employee3);

?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8"/>
   <title>Table</title>
</head>
<body>

<table border="1" cellspacing="0">
   <tr>
      <th>Name</th>
      <th>Surname</th>
      <th>Age</th>
      <th>Weight</th>
      <th>Can swim</th>
   </tr>
   
   <?php foreach ($employees as $e) : ?>

   <tr>   
      <td><?= $e["name"] ?></td>   
      <td><?= $e["surname"] ?></td>   
      <td><?= $e["age"] ?></td>   
      <td><?= $e["weight"] ?></td>   
      <td><?= $e["can_swim"] ? "Yes" : "Not" ?></td>
   </tr>
   
   <?php endforeach; ?>

</table>

</body>
</html>   
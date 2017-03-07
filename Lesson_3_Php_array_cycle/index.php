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

<table border="1">
   <tr>
      <th>Name</th>
      <th>Surname</th>
      <th>Age</th>
      <th>Weight</th>
      <th>Can swim</th>
   </tr>

   <tr>   
      <th><?= $employees[0]["name"] ?></th>   
      <th><?= $employees[0]["surname"] ?></th>   
      <th><?= $employees[0]["age"] ?></th>   
      <th><?= $employees[0]["weight"] ?></th>   
      <th><?= $employees[0]["can_swim"] ? "Yes" : "Not" ?></th>
   </tr>

   <tr>   
      <th><?= $employees[1]["name"] ?></th>   
      <th><?= $employees[1]["surname"] ?></th>   
      <th><?= $employees[1]["age"] ?></th>   
      <th><?= $employees[1]["weight"] ?></th>   
      <th><?= $employees[1]["can_swim"] ? "Yes" : "Not" ?></th> 
   </tr>
   
</table>

</body>
</html>   
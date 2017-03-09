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

$count = count($employees);

foreach ($employees as $e) {
	echo "<pre>";
	print_r($e);
}

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
   
   <?php for ($i = 0; $i < $count; $i++) : ?>

   <tr>   
      <td><?= $employees[$i]["name"] ?></td>   
      <td><?= $employees[$i]["surname"] ?></td>   
      <td><?= $employees[$i]["age"] ?></td>   
      <td><?= $employees[$i]["weight"] ?></td>   
      <td><?= $employees[$i]["can_swim"] ? "Yes" : "Not" ?></td>
   </tr>
   
   <?php endfor; ?>

</table>

</body>
</html>   
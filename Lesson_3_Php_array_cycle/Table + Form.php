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

$employee4 = array(
   "age" => 28,
   "weight" => 99.7,
   "name" => "Victor",
   "surname" => "Zagraychik",
   "can_swim" => true
);

$employee5 = array(
   "age" => 29,
   "weight" => 68.7,
   "name" => "Ludmila",
   "surname" => "Zagraychik (Mishevskaya)",
   "can_swim" => true
);

$employee6 = array(
   "age" => 2,
   "weight" => 14,
   "name" => "Alexandr",
   "surname" => "Zagraychik",
   "can_swim" => false
);

$employees = array($employee1, $employee2, $employee3, $employee4, $employee5, $employee6);

?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8"/>
   <title>Table</title>
   <style>
     .gray td {
		 background: #d2d2d2;
	 }
   </style>
</head>
<body>

<table border="1" cellspacing="0" cellpadding="5">
   <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Surname</th>
      <th>Age</th>
      <th>Weight</th>
      <th>Can swim</th>
   </tr>
   
   <?php foreach ($employees as $kay => $e) : ?>

   <tr <?= $kay % 2 ? "class='gray'" : "" ?> >
      <td><?= $kay ?> </td>   
      <td><?= $e["name"] ?> </td>   
      <td><?= $e["surname"] ?> </td>   
      <td><?= $e["age"] ?> </td>   
      <td><?= $e["weight"] ?> </td>   
      <td><?= $e["can_swim"] ? "<img src='img/Yes.png' alt='png' title='Yes' width='30' align='center'/>" : "<img src='img/No.png' alt='png' title='No' width='30' align='center'/>" ?> </td>
   </tr>
   
   <?php endforeach; ?>

</table>

<h1>Form</h1>

<form method="post"/>
   <input type="text" name="name"/>
   <input type="password" name="password"/>
   <button>Go!</button>
</form>


<?php
   if ($_POST){
	   echo "<h1>Form Data</h1>";
	   echo "<pre>";
	   var_dump($_POST);
   }
?>

<?php if ($_POST) : ?>
	   <h1>Form Data</h1>
	   <?php echo "<pre>"; print_r($_POST) ?>
<?php endif; ?>


</body>
</html>   
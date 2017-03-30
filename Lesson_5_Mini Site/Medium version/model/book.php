<?php

function findALLBooks($link) {

	$sql = "SELECT * FROM book WHERE status = 1 ORDER BY price";

	$res = mysql_get_result($link, $sql);

	return mysqli_fetch_all($res, MYSQLI_ASSOC);
}
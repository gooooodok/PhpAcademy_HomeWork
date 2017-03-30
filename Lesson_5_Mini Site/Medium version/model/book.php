<?php

function getSortedFields() {
	return ['title', 'price'];
}

function findALLBooks($link, $sortField, $sortOrder) {

	if (!in_array(strtolower($sortField), getSortedFields())){
		$sortField = 'price';
	}
	if (!in_array(strtolower($sortOrder), ['asc', 'desc'])){
		$sortField = 'price';
	}

	$sql = "SELECT * FROM book WHERE status = 1 ORDER BY {$sortField} {$sortOrder}";
	$res = mysql_get_result($link, $sql);

	return mysqli_fetch_all($res, MYSQLI_ASSOC);
}


function findBookById($link, $id) {
	$id = (int) $id;
	//$res = "SELECT * FROM book WHERE id = {$id}";  -  возможна SQL иньекция(взлом)

	$sql = "SELECT * FROM book WHERE id = ?";
	$stmt = mysqli_prepare($link, $sql);
	mysqli_stmt_bind_param($stmt, 'i', $id);
	mysqli_stmt_execute($stmt);

	$res = mysqli_stmt_get_result($stmt);

	return mysqli_fetch_assoc($res);


}
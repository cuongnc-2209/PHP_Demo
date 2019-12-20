<?php 

function exeQuery($sql, $getAll = false){
	$conn = new PDO('mysql:host=127.0.0.1;dbname=php_duan1;charset=utf8', 'root', '');	
	$stmt = $conn->prepare($sql);
	$stmt->execute();

	$result = null;

	if($getAll == true){
		$result = $stmt->fetchAll();
	}else{
		$result = $stmt->fetch();
	}

	return $result;

 }
 ?>


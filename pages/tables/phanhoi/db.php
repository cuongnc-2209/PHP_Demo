<?php 

function exeQuery($sql, $getAll = false){
	$conn = new PDO('mysql:host=127.0.0.1;dbname=post;charset=utf8', 'root', '');	
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


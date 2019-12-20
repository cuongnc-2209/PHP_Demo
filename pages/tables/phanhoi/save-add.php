<?php 
require_once "db.php";
$CusName = $_POST['CusName'];
$Contents = $_POST['Contents'];

$sqlQuery = "insert into feedback 
				(CusName, Contents)
			values
				('$CusName', '$Contents')";

exeQuery($sqlQuery);

header('location: ../data.php');
 ?>
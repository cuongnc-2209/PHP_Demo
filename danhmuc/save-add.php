<?php 
require_once "db.php";
$Category_Name = $_POST['Category_Name'];

$sqlQuery = "insert into category 
				(Category_Name)
			values
				('$Category_Name')";

exeQuery($sqlQuery);

header('location: ../index.php');
 ?>
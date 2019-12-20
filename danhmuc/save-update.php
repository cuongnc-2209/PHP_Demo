<?php 
require_once "db.php";
$id = $_POST['id'];

$sql = "select * from category where id = $id";
$post = exeQuery($sql);
if(!$post){
	header('location: ../index.php');die;
}

$Category_Name = $_POST['Category_Name'];

$sqlQuery = "update category 
				set 
						Category_Name = '$Category_Name'
						
				where id= $id";

exeQuery($sqlQuery);

header('location: ../index.php');
 ?>
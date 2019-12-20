<?php 
require_once "db.php";
$id = $_POST['id'];

$sql = "select * from feedback where id = $id";
$post = exeQuery($sql);
if(!$post){
	header('location: ../data.php');die;
}

$CusName = $_POST['CusName'];
$Contents = $_POST['Contents'];

$sqlQuery = "update feedback 
				set 
						CusName = '$CusName',
						Contents = '$Contents'
				where id= $id";

exeQuery($sqlQuery);

header('location: ../data.php');
 ?>
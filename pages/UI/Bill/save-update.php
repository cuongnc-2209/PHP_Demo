<?php 
require_once "db.php";
$id = $_POST['id'];
$sql = "select * from booktour where id = $id";
$post = exeQuery($sql);
if(!$post){
	header('location: ../general.php');die;
}
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$phone = $_POST['phone'];
$Tour_Name = $_POST['Tour_Name'];
$status = $_POST['status'];


$sqlQuery = "update booktour
				set 
						
						first_name = '$first_name',
						last_name = '$last_name',
						phone = '$phone', 
                        Tour_Name = '$Tour_Name',
                        status = '$status'
				where id= $id";
				//var_dump($sqlQuery);die;

exeQuery($sqlQuery);

header('location: ../general.php');
 ?>
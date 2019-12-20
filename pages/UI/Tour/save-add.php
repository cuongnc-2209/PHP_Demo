<?php 
require_once "db.php";
$Tour_Name = $_POST['Tour_Name'];
// luu anh
$file = $_FILES['Image'];
$filename = "";

if($file['size'] > 0){
	$filename = 'imgs/' . uniqid() . '-' . $file['name'];
	move_uploaded_file($file['tmp_name'], $filename);
}

$Infor_Tour = $_POST['Infor_Tour'];
$Price = $_POST['Price'];

$sqlQuery = "insert into tour 
				(Tour_Name, Image,  Infor_Tour, Price)
			values
				('$Tour_Name','$filename', '$Infor_Tour', '$Price')";
				
//var_dump($sqlQuery);die;
exeQuery($sqlQuery);

header('location: ../icons.php');
 ?>
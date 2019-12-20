<?php 
require_once "db.php";
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];
$password = $_POST['password'];
// luu anh
$file = $_FILES['avatar'];
$filename = "";

if($file['size'] > 0){
	$filename = 'imgs/' . uniqid() . '-' . $file['name'];
	move_uploaded_file($file['tmp_name'], $filename);
}

$sqlQuery = "insert into users 
				(fullname, email, phone_number, password, avatar)
			values
				('$fullname', '$email', '$phone_number', '$password', '$filename')";

exeQuery($sqlQuery);

header('location: ../fixed-sidebar.php');
 ?>
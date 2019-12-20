<?php 
require_once "db.php";
$id = $_POST['id'];

$sql = "select * from users where id = $id";
$post = exeQuery($sql);
if(!$post){
	header('location: ../fixed-sidebar.php');die;
}

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];
$password = $_POST['password'];
// luu anh
$file = $_FILES['avatar'];
$filename = $post['avatar'];

if($file['size'] > 0){
	$filename = 'imgs/' . uniqid() . '-' . $file['name'];
	move_uploaded_file($file['tmp_name'], $filename);
}

$sqlQuery = "update users 
				set 
						fullname = '$fullname',
						email = '$email',
						phone_number = '$phone_number',
						password = '$password', 
						avatar = '$filename'
				where id= $id";

exeQuery($sqlQuery);

header('location: ../fixed-sidebar.php');
 ?>
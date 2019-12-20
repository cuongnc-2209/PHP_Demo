<?php 
require_once "db.php";
$id = $_POST['id'];
$sql = "select * from tour where id = $id";
$post = exeQuery($sql);
if(!$post){
	header('location: ../icons.php');die;
}
$Price = $_POST['Price'];
$Tour_Name = $_POST['Tour_Name'];
$Infor_Tour = $_POST['Infor_Tour'];
// luu anh
$file = $_FILES['Image'];
$filename = $post['Image'];

if($file['size'] > 0){
	$filename = 'imgs/' . uniqid() . '-' . $file['name'];
	move_uploaded_file($file['tmp_name'], $filename);
;}

$sqlQuery = "update tour
				set 
						
						Price = '$Price',
						Tour_Name = '$Tour_Name',
						Infor_Tour = '$Infor_Tour', 
						Image = '$filename'
				where id= $id";
				//var_dump($sqlQuery);die;

exeQuery($sqlQuery);

header('location: ../icons.php');
 ?>
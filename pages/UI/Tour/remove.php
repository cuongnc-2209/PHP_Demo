<?php 
$id = $_GET['id'];
$host = "127.0.0.1";
$dbname = "php_duan1"; // tên database - lesson6
$dbusername = "root";
$dbpassword = ""; // mật khẩu truy cập vào mysql - nếu sử dụng xampp trên windows thì để ""
try{
	$connect = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $dbusername, $dbpassword);	
}catch(Exception $ex){
	var_dump($ex->getMessage());
	die;
}
$sql = "delete from tour where id = $id";
// nạp câu truy vấn vào kết nối
$stmt = $connect->prepare($sql);
// thực thi câu truy vấn với csdl
$stmt->execute();
header('location: ../icons.php');
 ?>
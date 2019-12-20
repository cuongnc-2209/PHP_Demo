<?php 

$id = $_GET['id'];

// tao ket noi den csdl
$conn = new PDO('mysql:host=127.0.0.1;dbname=php_duan1;charset=utf8', 'root', '');

$sqlQuery = "delete from category where id = $id";

// nap cau sql vao trong ket noi
$stmt = $conn->prepare($sqlQuery);

// thuc thi cau lenh sql voi csdl
$stmt->execute();

header('location: ../index.php');

 ?>
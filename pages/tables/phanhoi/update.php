<?php 
require_once 'db.php';

$id = $_GET['id'];
// lay du lieu tu db ra ngoai
$sql = "select * from feedback where id = $id";

$post = exeQuery($sql, false);
// neu khong tim thay ban ghi trong db thoa man id
if(!$post){
	header('location: ../data.php');die;
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style> 
input[type=text] {
  width: 30%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
label{
    display: block;
    position: relative;
    font-size: 16px;
    line-height: 30px;
    margin: 5px auto;
    height: 30px;
    z-index: 9;
    cursor: pointer;
    -webkit-transition: all 0.25s linear;
  }
</style>
<body>

	<form action="save-update.php" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?= $post['id'] ?>">
		<div>
			<label>Tên</label>
			<input type="text" name="CusName"
				value="<?= $post['CusName'] ?>" 
			>
		</div>
		<div>
			<label>Nội Dung</label>
			<textarea name="Contents" rows="10" cols="55"><?= $post['Contents'] ?></textarea>
		</div>
		<div>
			<button type="submit">Lưu</button>
		</div>
	</form>

</body>
</html>
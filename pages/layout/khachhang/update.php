<?php 
require_once 'db.php';

$id = $_GET['id'];
// lay du lieu tu db ra ngoai
$sql = "select * from users where id = $id";

$post = exeQuery($sql, false);
// neu khong tim thay ban ghi trong db thoa man id
if(!$post){
	header('location: ../fixed-sidebar.php');die;
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
			<label>Tên KH</label>
			<input type="text" name="fullname"
				value="<?= $post['fullname'] ?>" 
			>
		</div>
		<div>
			<?php if (isset($post['avatar'])): ?>
			<div style="width: 100px; border: 1px solid #ccc;height: 150px">
				<img src="<?= $post['avatar'] ?>" style="width: 100%">
			</div>
			<?php endif ?>
			<label>Ảnh Đại Diện</label>
			<input type="file" name="avatar" accept="image/*">
		</div>
		<div>
			<label>Email</label>
			<input type="text" name="email" value="<?= $post['email'] ?>">
		</div>
		<div>
			<label>SĐT</label>
			<input type="text" name="phone_number" value="<?= $post['phone_number'] ?>">
		</div>
		<div>
			<label>Mật Khẩu</label>
			<input type="text" name="password" value="<?= $post['password'] ?>">
		</div>
		<div>
			<button type="submit">Lưu</button>
		</div>
	</form>

</body>
</html>
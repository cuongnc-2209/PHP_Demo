<?php 
require_once 'db.php';

$id = $_GET['id'];
// lay du lieu tu db ra ngoai
$sql = "select * from tour where id = $id";

$post = exeQuery($sql, false);
// neu khong tim thay ban ghi trong db thoa man id
if(!$post){
	header('location: ../icons.php');die;
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
			<label>Tên Tour</label>
			<input type="text" name="Tour_Name" value="<?= $post['Tour_Name'] ?>">
		</div>

		<div>
			<?php if (isset($post['image'])): ?>
			<div style="width: 100px; border: 1px solid #ccc;height: 150px">
				<img src="<?= $post['Image'] ?>" style="width: 100%">
			</div>
			<?php endif ?>
			<label>Ảnh Tour</label>
			<input type="file" name="Image" accept="image/*">
		</div>
		<div>
			<label>Thông Tin Tour</label>
			<input type="text" name="Infor_Tour" value="<?= $post['Infor_Tour'] ?>">
		</div>
		<div>
			<label>Giá</label>
			<input type="text" name="Price" value="<?= $post['Price'] ?>">
		</div>
		<div>
			<button type="submit">Lưu</button>
		</div>
	</form>

</body>
</html>
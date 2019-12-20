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

	<form action="save-add.php" method="post" enctype="multipart/form-data">
		<div>
			<label>Tên</label>
			<input type="text" name="CusName">
		</div>
		<div>
			<label>Nội Dung</label>
			<textarea name="Contents" rows="10" cols="55"></textarea>
		</div>
		<div>
			<button type="submit">Lưu</button>
		</div>
	</form>

</body>
</html>
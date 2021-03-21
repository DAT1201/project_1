<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<H1>thêm giá trị</H1>
	<?php 
		$ten_thuoc_tinh=$_GET['ten_thuoc_tinh'];
		$ma_thuoc_tinh=$_GET['ma_thuoc_tinh'];
		$ma_nick= $_GET['ma_nick'];
		include '../../../connect.php';
		$sql = "select * from thuoc_tinh";
		$result = mysqli_query($connect,$sql);
	 ?>
	<form action="process_insert_value.php" method="POST">
		<input type="hidden" name="ma_nick" value="<?php echo $ma_nick ?>">
		<tr>
			<td>
				giá trị:
			</td>
			<td>
				<input type="number" name="gia_tri">
			</td>
		</tr>
		<br>
		<tr>
			<td>thuộc tính:</td>
			<td>
				<input type="hidden" name="ma_thuoc_tinh" value="<?php echo $ma_thuoc_tinh ?>">
				<?php echo $ten_thuoc_tinh ?>
			</td>
		</tr>
		<br>
		<tr>
			<td colspan="2">
				<button>Đăng</button>
			</td>
		</tr>
	</form>
</body>
</html>
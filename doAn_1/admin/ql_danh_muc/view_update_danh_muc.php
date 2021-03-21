<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<?php 
		$thu_muc_anh_danh_muc = '../../anh_danh_muc_sp/';
		require '../../connect.php';
		$ma = $_GET['ma'];
		$sql = "select * from danh_muc where ma = '$ma'";
		$result = mysqli_query($connect,$sql);
		$each = mysqli_fetch_array($result);
	 ?>
	<form action="process_update_danh_muc.php" method="post" enctype="multipart/form-data">
		<input type="hidden" name="ma" value="<?php echo $ma ?>">
		tiêu đề danh mục:
		<br>
		<input type="text" name="tieu_de_danh_muc" value="<?php echo $each['tieu_de_danh_muc'] ?>">
		<br>
		ảnh cũ:<br>
		<input type="hidden" name="anh_danh_muc_cu" value="<?php echo $each['anh_danh_muc'] ?>">
		<img style="height: 200px;" src="<?php echo $thu_muc_anh_danh_muc . $each['anh_danh_muc'] ?>">
		<br>
		giữ ảnh cũ hoặc đổi ảnh mới tại đây:<br>
		<input type="file" name="anh_danh_muc_moi">
		<br>
		<button>sửa</button>
	</form>
	<?php mysqli_close($connect); ?>
	
</body>
</html>
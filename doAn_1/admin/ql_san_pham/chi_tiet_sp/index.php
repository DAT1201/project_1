<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php include '../../../connect.php'; 
		$ma= $_GET['ma'];
	$sql = "select * from anh_chi_tiet where ma_tai_khoan='$ma'";
	$result = mysqli_query($connect, $sql);
	$thu_muc_anh = '../../../anh_chi_tiet/';
	$each = mysqli_fetch_array($result);
?>
<a href="view_insert_detail.php?ma=<?php echo $ma ?>">Thêm ảnh</a>
<table border='1' width='100%'>
	<tr>
		<th width='10%'>
			Mã tài khoản
		</th>
		<th colspan="">
			Ảnh chi tiết
		</th>
		<th>
			Sửa
		</th>
		<th>
			Xóa
		</th>
	</tr>
		
		<?php foreach ($result as $each) { ?>
	<tr>
		<td>
			<?php echo $each['ma_tai_khoan'] ?>
		</td>
		<td>
			<img style='height:200px;' src="<?php echo $thu_muc_anh . $each['anh'] ?>">
		</td>
		<td>
			<a href="update.php?ma_tai_khoan=<?php echo $each['ma_tai_khoan'] ?>&ma=<?php echo $each['ma'] ?>">Sửa</a>
		</td>
		<td>
			<a href="delete.php?ma=<?php echo $each['ma'] ?>&ma_tai_khoan=<?php echo $each['ma_tai_khoan'] ?>">Xóa</a>
		</td>
	</tr>
		<?php } ?>
</table>
<?php mysqli_close($connect) ?>
</body>
</html>
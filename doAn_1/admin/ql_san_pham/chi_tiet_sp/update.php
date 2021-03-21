<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<h1>ĐĂNG ẢNH CHI TIẾT</h1>
	<?php 
	include '../../../connect.php';
		$ma_anh = $_GET['ma'];
		$ma_tai_khoan = $_GET['ma_tai_khoan'];
		$sql = "select * from anh_chi_tiet where ma='$ma_anh'";
	$result = mysqli_query($connect, $sql);
	$thu_muc_anh = '../../../anh_chi_tiet/';
	$each = mysqli_fetch_array($result);
	 ?>
	<form action="process_update_detail.php" method="POST" enctype="multipart/form-data">
		<table>
			<input type="hidden" name="ma_anh" value="<?php echo $ma_anh ?>">
			<tr>
				<td>mã tài khoản:</td>
				<td>
					
					<input type="text" name="ma_tai_khoan" value="<?php echo $ma_tai_khoan ?>" readonly>
				</td>
			</tr>
			<tr>
					<td>ảnh cũ:</td>
				<td>
					<input type="hidden" name="anh_cu" value="<?php echo $each['anh'] ?>">
						<img style="height: 200px;" src="<?php echo $thu_muc_anh . $each['anh'] ?>">
				</td>
			</tr>
			<tr>
				<td>ảnh mới</td>
				<td>
					<input type="file" name="anh_moi">
				</td>
			</tr>
			
					<td>
						<button>Sửa</button>
					</td>
			</tr>
				
		</table>
	</form>
	<?php mysqli_close($connect) ?>
</body>
</html>
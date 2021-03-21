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
		$ma = $_GET['ma'];
	 ?>
	<form action="process_insert_detail.php" method="POST" enctype="multipart/form-data">
		<table>
			<tr>
				<td>
					mã tài khoản:
					<input type="text" name="ma" value="<?php echo $ma ?>" readonly>
				</td>
				<td>
					ảnh:
					<input type="file" name="anh"><br>
				</td>
			</tr>
			<tr>
					<td>
						<button>đăng</button>
					</td>
			</tr>
				
		</table>
	</form>
	<?php mysqli_close($connect) ?>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>chi tiết</title>
	<meta charset="utf-8">
</head>
<body>
	<?php 
	$thu_muc_anh = '../anh_chi_tiet/';
		include '../connect.php';
		$ma_tai_khoan = $_GET['ma'];
		$sql="select * from anh_chi_tiet where ma_tai_khoan='$ma_tai_khoan'";
		$result=mysqli_query($connect,$sql);
		// $each = mysqli_fetch_array($result);
	 ?>
	 <div id="div_chi_tiet">
	 	 <h1 style="text-align: center; background-color: #33cccc">
	 		Mã Số: <?php echo $ma_tai_khoan; ?>
	 </h1>
	 	<?php foreach ($result as $each): ?>
	 		<table width="80%" border="1" style="margin: auto;">
			 	<tr>
			 		<td>
			 			<img style="height: 400px;width: 100%;background-position: center center;" src="<?php echo $thu_muc_anh . $each['anh'] ?>">	
			 		</td>
			 		<br>
			 			
			 	</tr>
			</table>
	 <?php endforeach ?>
	 <div style="background-color: rgb(138, 254, 0,0.5);width:30%;margin: auto;">
								<a href="../gio_hang/gio_hang.php?ma=<?php echo $ma_tai_khoan ?>">thêm giỏ</a>
	 </div>
	
<?php mysqli_close($connect) ?>
</body>
</html>
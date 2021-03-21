<!DOCTYPE html>
<html>
<head>
	<title>cập nhật nhân viên</title>
	<meta charset="utf-8">
</head>
<body>
	<a href="index.php">Quay lại danh sách khách hàng</a>
	<?php 
		$ma = $_GET['ma'];
		require '../../connect.php';
		$sql = "select * from khach_hang where ma='$ma'";
		$result = mysqli_query($connect,$sql);
		$each = mysqli_fetch_array($result);
		mysqli_close($connect);
	  ?>
	  <form action="process_update_kh.php" method="POST">
	  	<input type="hidden" name="ma" value="<?php echo $ma ?>">
	  	<table width="100%" border="1">
		  	<th>Tên Đăng Nhập</th>
	  	<th>password</th>
	  	<th>email</th>
	  	<th>tên</th>
	  	<th>ngày sinh</th>
	  	<th>giới tính</th>
	  	<th>chỉnh sửa khách hàng</th>
		  		<tr>
		  			<td>
		  				<input type="hidden" name="ma" value="<?php echo $ma ?>">
		  				<input type="text" name="tai_khoan" value="<?php echo $each['tai_khoan']; ?>">
		  					
		  			</td>
		  			<td>
		  				<input type="text" name="mat_khau" value="<?php echo $each['mat_khau']; ?>">
		  			</td>
		  			<td>
		  				<input type="text" name="email" value="<?php echo $each['email']; ?>">
		  			</td>
		  			<td>
		  				<input type="text" name="ten" value="<?php echo $each['ten']; ?>">
		  			</td>
		  			<td>
		  				<?php include '../../ngaythangnam.php'; ?>
		  			</td>
		  			<td>
		  				<input type="text" name="gioi_tinh" value="<?php echo $each['gioi_tinh']; ?>">
		  			</td>
		  			<td>
		  				<button>sửa</button>
		  			</td>
		  		</tr>
	 	 </table>
	  </form>
	  
	
</body>
</html>
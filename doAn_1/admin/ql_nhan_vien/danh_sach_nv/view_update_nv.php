<!DOCTYPE html>
<html>
<head>
	<title>cập nhật nhân viên</title>
	<meta charset="utf-8">
</head>
<body>
	<a href="../index.php">thêm tài khoản cho nhân viên</a>
	<?php 
		$ma = $_GET['ma'];
		require '../../../connect.php';
		$sql = "select * from nhan_vien where ma='$ma'";
		$result = mysqli_query($connect,$sql);
		$each = mysqli_fetch_array($result);
		mysqli_close($connect);
	  ?>
	  <form action="process_update.php" method="POST">
	  	<input type="hidden" name="ma" value="<?php echo $ma ?>">
	  	<table width="100%" border="1">
		  	<th>tên nhân viên</th>
		  	<th>email</th>
		  	<th>giới tính</th>
		  	<th>tài khoản nhân viên</th>
		  	<th>mật khẩu</th>
		  	<th>ngày sinh</th>
		  	<th>sửa nhân viên</th>
		  		<tr>
		  			<td>
		  				<input type="hidden" name="ma" value="<?php echo $ma ?>">
		  				<input type="text" name="ten" value="<?php echo $each['ten']; ?>">
		  					
		  			</td>
		  			<td>
		  				<input type="text" name="email_nv" value="<?php echo $each['email_nv']; ?>">
		  			</td>
		  			<td>
		  				<input type="text" name="gioi_tinh" value="<?php echo $each['gioi_tinh']; ?>">
		  			</td>
		  			<td>
		  				<input type="text" name="tai_khoan_nhan_vien" value="<?php echo $each['tai_khoan_nhan_vien']; ?>">
		  			</td>
		  			<td>
		  				<input type="text" name="mat_khau" value="<?php echo $each['mat_khau']; ?>">
		  			</td>
		  			<td>
		  				<?php include '../../../ngaythangnam.php'; ?>
		  			</td>
		  			<td>
		  				<button>sửa</button>
		  			</td>
		  		</tr>
	 	 </table>
	  </form>
	  
	
</body>
</html>
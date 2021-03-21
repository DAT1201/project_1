<?php 
	$tai_khoan = $_POST['tai_khoan'];
	$mat_khau = $_POST['mat_khau'];
	$email=$_POST['email'];
	$ten =$_POST['ten'];
	$gioi_tinh = $_POST['gioi_tinh'];
	$day=$_POST['day'];
	$month=$_POST['month'];
	$year=$_POST['year'];
	$ngay_sinh="$year" . '-' . "$month" . '-' . "$day";
		require '../connect.php';
		
			$sql_check = "select tai_khoan,mat_khau from khach_hang where tai_khoan='$tai_khoan'";
	$result=mysqli_query($connect,$sql_check);
	$so_ban_ghi = mysqli_num_rows($result);

	if($so_ban_ghi==0){
		$sql ="insert into khach_hang(ten,ngay_sinh,gioi_tinh,email,tai_khoan,mat_khau) values('$ten','$ngay_sinh','$gioi_tinh','$email','$tai_khoan','$mat_khau')";
	mysqli_query($connect,$sql);
	mysqli_close($connect);
	header('location:../trang_chu/index.php?thong_bao');
	}else{
		header('location:index.php?error_sigin=tên đăng nhập đã tồn tại!');
		// exit;
	}

	
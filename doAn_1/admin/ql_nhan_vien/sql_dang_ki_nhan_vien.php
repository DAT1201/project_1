<?php 
	$ten_nhan_vien = $_POST['ten'];
	$email_nv = $_POST['email_nv'];
	$gioi_tinh = $_POST['gioi_tinh'];
	$tai_khoan_nhan_vien = $_POST['tai_khoan_nhan_vien'];
	$mat_khau =$_POST['mat_khau'];
	$day = $_POST['day'];
	$month = $_POST['month'];
	$year = $_POST['year'];
	$cap_do = $_POST['cap_do'];
	$ngay_sinh = $year . '-' . $month . '-' . $day;
	require '../../connect.php';
	$sql = "insert into nhan_vien(ten,email_nv,gioi_tinh,tai_khoan_nhan_vien,mat_khau,ngay_sinh,cap_do)values('$ten_nhan_vien','$email_nv','$gioi_tinh','$tai_khoan_nhan_vien','$mat_khau','$ngay_sinh','$cap_do')";
	mysqli_query($connect,$sql);
	mysqli_close($connect);
	header('location: danh_sach_nv/index.php');
 

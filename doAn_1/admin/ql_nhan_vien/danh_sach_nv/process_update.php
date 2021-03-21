<?php 
	$ma = $_POST['ma'];
	$ten_nhan_vien = $_POST['ten'];
	$email_nv = $_POST['email_nv'];
	$gioi_tinh = $_POST['gioi_tinh'];
	$tai_khoan_nhan_vien = $_POST['tai_khoan_nhan_vien'];
	$mat_khau=$_POST['mat_khau'];
	$day=$_POST['day'];
	$month=$_POST['month'];
	$year=$_POST['year'];
	$ngay_sinh="$year" . '-' . "$month" . '-' . "$day";
	require '../../../connect.php';
	$sql = "update nhan_vien set ten='$ten_nhan_vien',email_nv='$email_nv',gioi_tinh='$gioi_tinh',tai_khoan_nhan_vien='$tai_khoan_nhan_vien',mat_khau='$mat_khau',ngay_sinh='$ngay_sinh' where ma='$ma'";
	mysqli_query($connect,$sql);
	mysqli_close($connect);
	header('location:index.php');
 ?>
<?php 
	$ma = $_POST['ma'];
	$tai_khoan = $_POST['tai_khoan'];
	$mat_khau = $_POST['mat_khau'];
	$email = $_POST['email'];
	$ten = $_POST['ten'];
	$day=$_POST['day'];
	$month=$_POST['month'];
	$year=$_POST['year'];
	$ngay_sinh="$year" . '-' . "$month" . '-' . "$day";
	$gioi_tinh = $_POST['gioi_tinh'];
	require '../../connect.php';
	$sql = "update khach_hang set tai_khoan='$tai_khoan',mat_khau='$mat_khau',email='$email',ten='$ten',ngay_sinh='$ngay_sinh',gioi_tinh='$gioi_tinh' where ma='$ma'";
	mysqli_query($connect,$sql);
	mysqli_close($connect);
	header('location:index.php');
 ?>
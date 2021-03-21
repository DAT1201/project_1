<?php 
include '../../../connect.php';
	$ma = $_GET['ma'];
	$ma_tai_khoan = $_GET['ma_tai_khoan'];
$sql = "delete from anh_chi_tiet where ma = '$ma'";
mysqli_query($connect,$sql);
header('location:index.php?ma=' . $ma_tai_khoan);
mysqli_close($connect);
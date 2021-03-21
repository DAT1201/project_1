<?php  
session_start();
$tai_khoan_nhan_vien = $_POST['tai_khoan_nhan_vien'];
$mat_khau = $_POST['mat_khau'];
include '../../connect.php';
$sql = " select * from nhan_vien where tai_khoan_nhan_vien = '$tai_khoan_nhan_vien' and mat_khau = '$mat_khau'";
$result = mysqli_query($connect,$sql);
$mat_khau = md5($mat_khau);

$dem_ban_ghi = mysqli_num_rows($result);
 if ($dem_ban_ghi == 1) {
 	// if(isset($_SESSION['user'])){
 	// 	unset($_SESSION['ten']);
 	// 	unset($_SESSION['ma']);
 	// 	unset($_SESSION['user']);
 	// }
 	$each = mysqli_fetch_array($result);
 	$_SESSION['cap_do'] = $each['cap_do'];
 	$_SESSION['ma_admin'] = $each['ma'];
 	$_SESSION['ten_admin'] = $each['ten'];
 	header('location:../index.php');
 }else{
 	header('location:../index.php?error_admin');
 }
 mysqli_close($connect);
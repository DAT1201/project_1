<?php 
$ma_hoa_don = $_GET['ma_hoa_don'];
include '../../connect.php';
$sql_check = "select tinh_trang from hoa_don where ma_hoa_don = '$ma_hoa_don'";
$result_check = mysqli_query($connect, $sql_check);
$each = mysqli_fetch_array($result_check);


if($each['tinh_trang']==1){
	$sql = "update hoa_don set tinh_trang = 3 where ma_hoa_don = '$ma_hoa_don'";
	mysqli_query($connect, $sql);
	mysqli_close();
	header('location:index.php');
}elseif($each['tinh_trang']==2){
	header('location:index.php?error_huy_don_hang');
}


?>
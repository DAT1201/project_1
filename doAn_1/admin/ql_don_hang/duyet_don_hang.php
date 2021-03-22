<?php 
	$ma_hoa_don = $_GET['ma_hoa_don'];
	$ma_nick = $_GET['ma_nick'];
	$tinh_trang = $_GET['tinh_trang'];
	include '../../connect.php';
	$sql_check = "select tinh_trang from hoa_don where ma_hoa_don = '$ma_hoa_don'";
	$result_check = mysqli_query($connect, $sql_check);
	$each = mysqli_fetch_array($result_check);

	if($each['tinh_trang']==1){
	$sql = "update hoa_don set tinh_trang = '$tinh_trang' where ma_nick = '$ma_nick'";
	mysqli_query($connect, $sql);
	mysqli_close($connect);
	header('location:index.php?duyet_don');
	}elseif($each['tinh_trang']==3){
		header('location:index.php?error_duyet_don_hang');
	}
?>
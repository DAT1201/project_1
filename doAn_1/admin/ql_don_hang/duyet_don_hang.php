<?php 
	$ma_nick = $_GET['ma_nick'];
	$tinh_trang = $_GET['tinh_trang'];
	include '../../connect.php';
	$sql = "update hoa_don set tinh_trang = '$tinh_trang' where ma_nick = '$ma_nick'";
	mysqli_query($connect, $sql);
	mysqli_close($connect);
	header('location:index.php?duyet_don');
?>
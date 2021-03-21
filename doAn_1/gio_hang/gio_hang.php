<?php
// session_start();
$ma_danh_muc = $_GET['ma_danh_muc'];
session_start();
if(empty($_SESSION['user'])){
	header('location:../trang_chu/index.php?error=bạn cẩn phải đăng nhập');
	}else{
			$ma_sp = $_GET['ma'];
	if(isset($_SESSION['gio_hang'][$ma_sp])){
		 $_SESSION['gio_hang'][$ma_sp]++;
	}else{
		$_SESSION['gio_hang'][$ma_sp]=1;
	}
	header('location:../gio_hang/xem_gio_hang.php?them_gio_2' );
}




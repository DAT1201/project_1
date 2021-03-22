<?php
// session_start();
session_start();
	if(isset($_GET['ma_danh_muc'])){
		$ma_danh_muc = $_GET['ma_danh_muc'];
	}
if(empty($_SESSION['user'])){
	header('location:../trang_chu/index.php?error=bạn cẩn phải đăng nhập');
	}else{
			$ma_sp = $_GET['ma'];
	if(isset($_SESSION['gio_hang'][$ma_sp])){
		 $_SESSION['gio_hang'][$ma_sp]++;
	}else{
		$_SESSION['gio_hang'][$ma_sp]=1;
	}
	header('location:../san_pham/index.php?them_gio&ma_danh_muc='.$ma_danh_muc);
}




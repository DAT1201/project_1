<?php 

	session_start();
	// if (isset($_SESSION)){
		
	// unset($_SESSION['access_name']);
	unset($_SESSION['ten']) ;
	unset($_SESSION['ma']);
	unset($_SESSION['user']);

	// xóa session login
	header('location:../trang_chu/index.php');
// }

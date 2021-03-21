<?php 
session_start();
if(empty($_SESSION['user'])){
	header('location:../trang_chu/index.php?error=xin vui lòng đăng nhập để sử dụng tính năng!');
}
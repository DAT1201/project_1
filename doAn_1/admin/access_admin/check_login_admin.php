<?php 

	if(empty($_SESSION['cap_do'])){
		header('location:../index.php?ABC=bạn cần phải đăng nhập!');
	}
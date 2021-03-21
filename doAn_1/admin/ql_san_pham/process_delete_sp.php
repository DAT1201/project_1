<?php 
	$ma = $_GET['ma'];
	// $ma_mo_ta = $_GET['ma_mo_ta'];

		require '../../connect.php';
	$sql1 = "delete from gia_tri_thuoc_tinh where ma_nick ='$ma'";
	$result1 = mysqli_query($connect,$sql1);
	$sql2 = "delete from thong_tin_nick where ma ='$ma'";
	$result2 = mysqli_query($connect,$sql2);
	mysqli_close($connect);
	header('location:index.php');
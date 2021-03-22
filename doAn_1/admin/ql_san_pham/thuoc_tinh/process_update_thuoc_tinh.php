<?php 
	include '../../../connect.php';
	$gia_tri = $_POST['gia_tri'];
	$ma_nick=$_GET['ma_nick'];
	$ma_thuoc_tinh=$_GET['ma_thuoc_tinh'];
	$ten_thuoc_tinh=$_POST['ten_thuoc_tinh'];
	if($gia_tri > 0){
		$sql= "update gia_tri_thuoc_tinh set gia_tri='$gia_tri' where ma_thuoc_tinh='$ma_thuoc_tinh' and ma_nick='$ma_nick'";
		$result = mysqli_query($connect,$sql);
		$sql_th="update thuoc_tinh set ten_thuoc_tinh='$ten_thuoc_tinh' where ma='$ma_thuoc_tinh'";
		$result_th=mysqli_query($connect,$sql_th);
		mysqli_close($connect);
		header('location:index.php?ma=' . $ma_nick);
	}else{
		header('location:index.php?ma=' . $ma_nick.'&error_am');
	}
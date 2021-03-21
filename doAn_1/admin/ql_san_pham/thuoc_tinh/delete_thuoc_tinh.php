<?php
	include '../../../connect.php';
	$ma_nick=$_GET['ma_nick'];
	$ma_thuoc_tinh=$_GET['ma_thuoc_tinh'];
	$sql= "delete from gia_tri_thuoc_tinh where ma_thuoc_tinh='$ma_thuoc_tinh'";
	$result = mysqli_query($connect,$sql);
	$sql_th="delete from thuoc_tinh where ma='$ma_thuoc_tinh'";
	$result_th=mysqli_query($connect,$sql_th);
mysqli_close($connect);
header('location:index.php?ma=' . $ma_nick);
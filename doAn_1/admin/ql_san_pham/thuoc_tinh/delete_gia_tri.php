<?php
	include '../../../connect.php';
	$ma_nick=$_GET['ma_nick'];
	$ma_thuoc_tinh=$_GET['ma_thuoc_tinh'];
	$sql= "delete from gia_tri_thuoc_tinh where ma_nick='$ma_nick'and ma_thuoc_tinh='$ma_thuoc_tinh'";
	$result = mysqli_query($connect,$sql);

mysqli_close($connect);
header('location:index.php?ma=' . $ma_nick);
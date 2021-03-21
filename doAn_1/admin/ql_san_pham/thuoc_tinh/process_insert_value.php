<?php  
	include '../../../connect.php';
	$ma_nick = $_POST['ma_nick'];
	$ma_thuoc_tinh = $_POST['ma_thuoc_tinh'];
	$gia_tri = $_POST['gia_tri'];
	$sql ="insert into gia_tri_thuoc_tinh(ma_nick,ma_thuoc_tinh,gia_tri) values('$ma_nick','$ma_thuoc_tinh','$gia_tri')";
	mysqli_query($connect,$sql);
	mysqli_close($connect);
	header('location:index.php?ma=' . $ma_nick);
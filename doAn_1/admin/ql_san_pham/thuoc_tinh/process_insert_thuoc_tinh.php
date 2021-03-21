<?php 
	include '../../../connect.php';
	$ten_thuoc_tinh = $_POST['thuoc_tinh'];
	$ma_nick = $_POST['ma_nick'];
	$sql ="insert into thuoc_tinh(ten_thuoc_tinh) values ('$ten_thuoc_tinh')";
	mysqli_query($connect,$sql);
	mysqli_close($connect);
	header('location:index.php?ma=' . $ma_nick);
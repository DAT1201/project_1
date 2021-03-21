<?php 

require '../../../connect.php';
	$ma = $_POST['ma'];
	$anh = $_FILES['anh'];
	$thu_muc_anh = '../../../anh_chi_tiet/';
	$ten_anh = $anh['name'];
	$duoi_anh = explode('.',$anh['name'])[1];
	$ten_anh = time() . '.' . $duoi_anh;
	$duong_dan_anh=$thu_muc_anh . $ten_anh;
move_uploaded_file($anh['tmp_name'],$duong_dan_anh);
$sql = "insert into anh_chi_tiet(ma_tai_khoan,anh) values('$ma','$ten_anh')";
mysqli_query($connect,$sql);
mysqli_close($connect);
header('location:index.php?ma=' . $ma);
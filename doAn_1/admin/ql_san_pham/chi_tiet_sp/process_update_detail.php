<?php 
require '../../../connect.php';
$ma_tai_khoan = $_POST['ma_tai_khoan'];
$ma_anh = $_POST['ma_anh'];
$anh = $_FILES['anh_moi'];
if($anh['size']==0){
		$ten_anh = $_POST['anh_cu'];
	}else{
		$thu_muc_anh = '../../../anh_chi_tiet/';
	$ten_anh = $anh['name'];
	$duoi_anh = explode('.', $anh['name'])[1];
	$ten_anh = time() . '.' . $duoi_anh;
	$duong_dan_anh=$thu_muc_anh . $ten_anh;
	move_uploaded_file($anh['tmp_name'],$duong_dan_anh);
}
$sql = "update anh_chi_tiet set anh='$ten_anh' where ma = '$ma_anh' ";
mysqli_query($connect,$sql);
	mysqli_close($connect);
	header('location:index.php?ma=' . $ma_tai_khoan);
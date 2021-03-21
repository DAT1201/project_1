<?php  

$ma_nick= $_POST['ma_nick'];
$tai_khoan_nick = $_POST['tai_khoan'];
$mat_khau_nick = $_POST['mat_khau'];
$gia = $_POST["gia"];
$anh = $_FILES['anh'];
$ma_rank=$_POST['ma_rank'];
$ma_danh_muc=$_POST['ma_danh_muc'];


$thu_muc_danh_muc_anh_sp = '../../anh_san_pham/';
$ten_anh = $anh['name'];
$duoi_anh = explode('.',$anh['name'])[1];
$ten_anh = time() . '.' . $duoi_anh;
$duong_dan_danh_muc_sp=$thu_muc_danh_muc_anh_sp . $ten_anh;
move_uploaded_file($anh['tmp_name'],$duong_dan_danh_muc_sp);
require '../../connect.php';
$sql_check = "select tai_khoan from thong_tin_nick where tai_khoan='$tai_khoan_nick'";
	$result=mysqli_query($connect,$sql_check);
	$so_ban_ghi = mysqli_num_rows($result);
if($so_ban_ghi==0){
	$sql = "insert into thong_tin_nick(gia,anh,ma_rank,ma_danh_muc,tai_khoan,mat_khau) values('$gia','$ten_anh','$ma_rank','$ma_danh_muc','$tai_khoan_nick','$mat_khau_nick')";
mysqli_query($connect,$sql);
mysqli_close($connect);
header('location:index.php');
}else{
		header('location:view_insert_sp.php?error_add');
}

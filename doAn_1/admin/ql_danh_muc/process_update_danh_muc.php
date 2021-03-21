<?php  

 $ma = $_POST['ma'];
 $tieu_de_danh_muc=$_POST['tieu_de_danh_muc'];
 $anh_danh_muc=$_FILES['anh_danh_muc_moi'];
 if($anh_danh_muc['size']==0){
 	$ten_anh = $_POST['anh_danh_muc_cu'];
 }else{
 	$duoi_anh = explode('.', $anh_danh_muc['name'])[1];
	$ten_anh = time() . '.' . $duoi_anh;
	$thu_muc_anh_danh_muc = '../../anh_danh_muc_sp/';
	$ten_anh = $anh_danh_muc['name'];
	$duong_dan_anh = $thu_muc_anh_danh_muc . $ten_anh;
	move_uploaded_file($anh_danh_muc['tmp_name'], $duong_dan_anh);
 }

	require '../../connect.php';
	$sql = "update danh_muc set tieu_de_danh_muc='$tieu_de_danh_muc',anh_danh_muc='$ten_anh' where ma ='$ma'";

	mysqli_query($connect,$sql);
	mysqli_close($connect);
	header('location:index.php');
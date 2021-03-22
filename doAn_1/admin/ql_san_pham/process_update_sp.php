<?php 
	$ma_nick= $_POST['ma_nick'];
	$tai_khoan_nick = $_POST['tai_khoan'];
	$mat_khau_nick = $_POST['mat_khau'];
	$ma = $_POST['ma'];
	$gia = $_POST["gia"];
	$anh = $_FILES['anh_moi'];
	$ma_rank=$_POST['ma_rank'];
	$ma_danh_muc = $_POST['ma_danh_muc'];
	if($anh['size']==0){
		$ten_anh = $_POST['anh_cu'];
	}else{
		$thu_muc_danh_muc_anh_sp = '../../anh_san_pham/';
	$ten_anh = $anh['name'];
	$duoi_anh = explode('.', $anh['name'])[1];
	$ten_anh = time() . '.' . $duoi_anh;
	$duong_dan_danh_muc_sp=$thu_muc_danh_muc_anh_sp . $ten_anh;
	move_uploaded_file($anh['tmp_name'],$duong_dan_danh_muc_sp);

	}

		require '../../connect.php';

	$sql = "update thong_tin_nick set gia='$gia',anh='$ten_anh',ma_rank='$ma_rank',ma_danh_muc='$ma_danh_muc',tai_khoan='$tai_khoan_nick',mat_khau='$mat_khau_nick' where ma ='$ma' ";
	mysqli_query($connect,$sql);
	mysqli_close($connect);
	header('location:index.php?update');
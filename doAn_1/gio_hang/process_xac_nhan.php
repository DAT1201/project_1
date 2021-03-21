<?php  
date_default_timezone_set('Asia/Ho_Chi_Minh');
$ten_nguoi_mua = $_POST['ten_nguoi_mua'];
$email = $_POST['email'];

session_start();
$ma = $_SESSION['ma'];
$tinh_trang = 1;
$thoi_gian_mua = date("Y-m-d H:i:s");
include '../connect.php';
foreach ($_SESSION['gio_hang'] as $ma_sp => $so_luong) {
$sql = "select thong_tin_nick.*,hoa_don.tinh_trang from thong_tin_nick left join hoa_don on hoa_don.ma_nick = thong_tin_nick.ma where ma_nick = '$ma_sp'";
	$result = mysqli_query($connect,$sql);
	$each = mysqli_fetch_array($result);
if (isset($each['tinh_trang'])) {
	unset($_SESSION['gio_hang']);
	header('location:xem_gio_hang.php?thong_bao_sp');
}else{
 	$sql = "insert into hoa_don(ma_khach_hang,ma_nick,tinh_trang,ten_nguoi_mua,email,thoi_gian_mua) values('$ma','$ma_sp','$tinh_trang','$ten_nguoi_mua','$email','$thoi_gian_mua')";
 	mysqli_query($connect,$sql);
 	unset($_SESSION['gio_hang']);
header('location:../thanh_toan/index.php');
}

}


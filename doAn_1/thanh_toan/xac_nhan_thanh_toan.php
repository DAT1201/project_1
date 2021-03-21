<?php 
include '../connect.php';
$ma_hoa_don = $_GET['ma_hoa_don'];
$tinh_trang = $_GET['tinh_trang'];
$sql= "update hoa_don set tinh_trang = '$tinh_trang' where ma_hoa_don='$ma_hoa_don'";
mysqli_query($connect,$sql);
mysqli_close($connect);
header('location:index.php');
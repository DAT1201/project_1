<?php 
$ma_khach_hang = $_POST['ma_khach_hang'];
$ten = $_POST['ten'];
$gioi_tinh = $_POST['gioi_tinh'];
$email = $_POST['email'];
$ngay = $_POST['day'];
$thang = $_POST['month'];
$nam = $_POST['year'];
$ngay_sinh = $nam . "-" . $thang . "-" . $ngay;

include '../connect.php';
$sql = "update khach_hang set ten = '$ten',ngay_sinh = '$ngay_sinh' , gioi_tinh = '$gioi_tinh', email = '$email' where ma = '$ma_khach_hang'";
$result = mysqli_query($connect, $sql);
mysqli_close($connect);
header('location:index.php?doi_thong_tin');
?>
<?php 
include '../connect.php';
$ma = $_GET['ma'];
$mkm = $_POST['mkm'];
$sql = "update `khach_hang` set `mat_khau`= '$mkm' WHERE ma = '$ma'";
$result = mysqli_query($connect, $sql);
mysqli_close($connect);
header('location:index.php?thong_bao_dmk');
?>
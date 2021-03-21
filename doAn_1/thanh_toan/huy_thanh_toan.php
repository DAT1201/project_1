<?php  
include '../connect.php';
$ma_hoa_don = $_GET['ma_hoa_don'];
$sql_hoa_don="delete from hoa_don where ma_hoa_don='$ma_hoa_don'";
mysqli_query($connect,$sql_hoa_don);
mysqli_close($connect);
header('location:index.php');
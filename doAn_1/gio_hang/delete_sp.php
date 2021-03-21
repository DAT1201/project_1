<?php  
$ma_sp = $_GET['ma'];
session_start();
unset($_SESSION['gio_hang'][$ma_sp]);
header('location:xem_gio_hang.php');
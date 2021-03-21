<?php 
session_start();
// session_destroy();
if(isset($_SESSION['cap_do'])){
	unset($_SESSION['ma_admin']);
unset($_SESSION['cap_do']);
unset($_SESSION['ten_admin']);
header('location: ../index.php');
}

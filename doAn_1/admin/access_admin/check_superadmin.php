<?php 
	if($_SESSION['cap_do'] != 'superadmin'){
		header('location:../index.php?error_superadmin');
	}
?>
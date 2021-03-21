<?php 
	if($_SESSION['cap_do']!='superadmin'){
		header('../index.php?error_superadmin');
	}
?>
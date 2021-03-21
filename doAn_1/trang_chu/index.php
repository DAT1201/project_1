<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<style type="text/css">
		#div_tong{
			width: 100%;
			height: auto;
			/*position: fixed;*/
			background-image: url('../banner_and_slide/nen_tong.jpg');
			/*background-size: cover;*/
			/*background-position: center center;*/
		}
		#div_tong > #so_trang{
			/*padding-left: 200px;*/
			text-align: center;
			float: none;
			}
	</style>
	
</head>
<body>
<div id='div_tong'>
	<?php include 'banner.php' ?>
	<?php include'promote.php' ?>
	<?php include 'chu_ngang.php'; ?>
	<?php include 'content.php' ?>
	 <?php include 'xem_so_trang.php'; ?>
	  <?php  include 'footer.php' ?>
	<!-- <?php include '../nap_the/nap_the.php'; ?> -->
</div>
</body>
</html>
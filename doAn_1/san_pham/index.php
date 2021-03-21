<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>sản phẩm</title>
	<meta charset="utf-8">
	<style type="text/css">
		#div_tong{
			width: 100%;
			height: auto;
			/*position: relative;*/
			background-image: url('../banner_and_slide/nen_tong.jpg');
			background-size: cover;
			background-position: center center;
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
	<?php include '../trang_chu/banner.php' ?> 
	<?php include'promote.php' ?> 
	<?php include '../trang_chu/chu_ngang.php'; ?>
	<?php include 'san_pham_danh_muc.php' ?>
	 <?php include 'so_trang.php' ?>
	  <?php  include '../trang_chu/footer.php' ?>
	<!-- <?php include '../nap_the/nap_the.php'; ?> -->
</div>
</body>
</html>
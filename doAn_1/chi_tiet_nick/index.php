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
		#div_tong > #div_chi_tiet{
			text-align: center;
			margin: auto;
		}
	</style>
</head>
<body>
<div id='div_tong'>
	<?php include '../trang_chu/banner.php' ?>
	<?php include'../trang_chu/promote.php' ?>
	<?php include 'chi_tiet.php' ?>
	  <?php  include '../trang_chu/footer.php' ?>
	<!-- <?php include '../nap_the/nap_the.php'; ?> -->
</div>
</body>
</html>
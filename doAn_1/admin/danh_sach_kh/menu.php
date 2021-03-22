<!-- <?php session_start(); ?> -->
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<style type="text/css">
		ul {
			padding:0px;
			list-style-type: none;
			top: -15px;
			position: absolute;
			
			background-color: #5ae8c7;
		}
		ul > li {
			float: left;
			border: 1px solid black;
		}
		a{
			text-decoration: none;
			font-size: 23px;
			padding: 5px;
			font-weight: bold;
			color: #000000;
		}
		#menu > li > ul{
			display: none;
			border: 1px solid black;
		}
		#menu > li:hover > ul{
			position: absolute;
			z-index: 3;
			top: 32px;
			display:block;

		}
		ul > li > ul >li{
			float: none;
			right: 100px;
			top: 5px;

		}
	</style>
</head>
<body>
<ul id='menu'>
	<?php if($_SESSION['cap_do'] == 'superadmin'){ ?>
	<li>
		<a href="../ql_nhan_vien/danh_sach_nv/index.php">
			Nhân viên
		</a>
	</li>
	<?php } ?>
	<li>
		<a href="../danh_sach_kh/index.php">
			Khách hàng
		</a>
	</li>
	<li>
		<a href="../ql_san_pham/index.php">
			Sản phẩm
		</a>
	</li>
	<li>
		<a href="../ql_danh_muc/index.php">
			Danh mục
		</a>
	</li>
	<li>
		<a href="../thong_ke/index.php">
			Thống kê
		</a>
	</li>
</ul>
</body>
</html>
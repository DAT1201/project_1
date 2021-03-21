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
	<li>
		<a href="../../trang_chu/index.php">
			Trang chủ khách hàng
		</a>
	</li>
</ul>
</body>
</html>
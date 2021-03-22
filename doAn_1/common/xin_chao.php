<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
	.display{
		position: absolute;
		top: 7px;
		left: 100px;
		padding: 15px 33px;
 		background-color: rgb(255, 37, 0 , 0.2) ;
    	border: 5px groove yellow;
		color: rgb(30, 4, 153);
		text-shadow: 0 0 150px #FFF, 0 0 60px #FFF, 0 0 10px #FFF;
		font-weight: bold;
		font-size: 15px;
	}
	.hide{
		display: none;
	}
	.display:hover {
		position: absolute;
	}
	.display:hover > .hide{
		display: block;
		z-index: 100;
	}
	.hide1{
		padding:8px 0px 8px;
		position: relative;
		top: 8px;
	}
	.hide1:hover{
		background-color: #ddd;
	}
	.list{
		color: rgb(30, 4, 153);
		text-shadow: 0 0 150px #FFF, 0 0 60px #FFF, 0 0 10px #FFF;
		font-weight: bold;
		font-size: 15px;
	}
	.list:hover{
		/*background-color: #ddd;*/
		color: black;
	}
</style>
<body>
	<?php if (isset($_SESSION['ten'])){ ?>
		<div id="Xin_chao">
		<ul>
			<li class='display'>
				Xin chào: <?php echo substr($_SESSION['ten'], 0,15) ?>
				<ul class='hide'>
				<!-- 	<li class='hide1'>
						<a class='list' href="../doi_thong_tin">
							Sửa thông tin
						</a>
					</li> -->
					<li class='hide1'>
						<a class='list' href="../accessUser/process_logout_user.php">
							Đăng xuất
						</a>
					</li>
				</ul>
			</li>
		</ul>
		
	</div>
	<?php } ?>
 	
</body>
</html>
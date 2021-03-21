<link rel="stylesheet" type="text/css" href="banner.css">
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
<div id='div_banner'>
	
	<div>

	<?php if(empty($_SESSION['ten'])){ ?>
		<div id="dang_nhap">
			<?php include '../trang_chu/login.php'; ?>
		</div>
			<?php }else{ ?>
				<div id="check_login">
					<div class="xin_chao">
						<?php include '../common/xin_chao.php'; ?>
					</div>
					<div id="cart_logout">
							<div id="icon-shopping-cart">
								<!-- <a href="../gio_hang/xem_gio_hang.php" style="text-decoration: none;font-size: 15px;"><i class="icon-shopping-cart icon-3x" title="NICK ĐÃ CHỌN"></i></a> -->
							</div>
							<?php include '../common/logout_user.php'; ?>
					</div>
				</div>
		<?php } ?>
	</div>
	<div id="div_logo">
		<img src="../banner_and_slide/logo24h.png" style="width: 20%;height: 50px;image-rendering: pixelated;position: fixed;">
	</div>
	
	<div id='div_menu'>
		<?php include '../common/menu.php' ?>
	</div>
	
	
</div>
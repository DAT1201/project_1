<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>quan_li</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>
	<script type="text/javascript">
			<?php 
				if(isset($_GET['error_superadmin'])){ ?>
				alert('Cần đăng nhập bằng tài khoản superadmin!!');
			<?php } ?>
			<?php 
				if(isset($_GET['error_admin'])){ ?>
				alert('kiểm tra lại Tài khoản hoặc mật khẩu!');
			<?php } ?>
			<?php 
				if(isset($_GET['ABC'])){ ?>
				alert('Cần đăng nhập bằng tài khoản admin!');
			<?php } ?>
		</script>
	<div id="div_tong_admin">
		<div id="div_banner">
			<?php if(empty($_SESSION['cap_do'])){ ?>
				<div id="access_admin">
					<?php include 'access_admin/admin_login.php'; ?>
				</div>
			<?php }else{ ?>
				<div id="check_login_admin">
					<div class="xin_chao_admin">
						Xin chào <?php echo $_SESSION['cap_do'] ?>:<?php echo $_SESSION['ten_admin']; ?><br>
					</div>
					<div class="logout_admin">
						<a href="access_admin/process_logout_admin.php">ĐĂNG XUẤT</a>
					</div>
				</div>
			<?php } ?>
			
			<div id="div_logo">
				<a href="http://localhost/doAn_1/trang_chu/index.php">
					<img src="../banner_and_slide/logo24h.png" style="width: 100%;height: 50px;image-rendering: pixelated;">
				</a>
			</div>
			<div id='div_menu'>
				<?php include '../common/menu.php' ?>
			</div>
		</div>
		<div id="chu_ngang">
			<?php include 'chu_ngang.php'; ?>
		</div>
		<div id="menu_ql">
			<ul id="menu_ul">
				<?php 
				if (isset($_SESSION['cap_do'])) {
					if($_SESSION['cap_do']=="superadmin"){ ?>
				<li>
					<a href="ql_nhan_vien/index.php">Quản Lí nhân Viên</a>
					<ul>
						<li>
							<a href="ql_nhan_vien/danh_sach_nv/index.php">DS nhân viên</a>
						</li>
						<li>
							<a href="ql_nhan_vien/index.php">Thêm nhân viên</a>
						</li>
					</ul>
				</li>
					<?php } ?>	
				<?php } ?>
				
				<li>
					<a href="danh_sach_kh/index.php">Quản lí khách hàng</a>
					<ul>
						<li>
							<a href="danh_sach_kh/index.php">DS Khách hàng</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="ql_san_pham/index.php">Quản Lí Sản Phẩm</a>
					<ul>
						<li>
							<a href="ql_san_pham/index.php">Xem sản phẩm</a>
						</li>
						<li>
							<a href="ql_san_pham/view_insert_sp.php">Thêm sản phẩm</a>
						</li>
						<li>
							<a href="ql_don_hang/index.php">Quản lý đơn hàng</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="ql_danh_muc/index.php">Quản Lí danh mục</a>
					<ul>
						<li>
							<a href="ql_danh_muc/index.php">Xem danh mục</a>
						</li>
						<li>
							<a href="ql_danh_muc/view_insert_danh_muc.php">Thêm danh mục</a>
						</li>
					</ul>
				</li>
				<!-- <li>
					<a href="">Quản lý đơn hàng</a>
				</li> -->
				<li>
					<a href="thong_ke/index.php">Thống kê</a>
				</li>
			</ul>
		</div>
		  
	</div>	
</body>
</html>
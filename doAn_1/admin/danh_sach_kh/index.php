<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>danh sách nhân viên</title>
	<meta charset="utf-8">
</head>
<style type="text/css">
	#nut_dk{
		text-decoration: none;
		border: 2px groove yellow;
		 background-color: red;
		 font-size: 17px;
		height: auto;
		width: 18%;
		position: absolute;
		top: 20px;
		right: 30px;
	}
	#div_banner{
		width: 100%;
		height: 12%;
		margin: all;
		background-image: url('../../banner_and_slide/banner2.jpg');
		background-position: center center;
		background-size: cover;
		z-index: 99;
	}
	#div_banner > #div_logo{
		width: 20%;

		height: auto;
		padding-left: 40px;
		padding-top: 30px;
		/*float :left;*/
	}
	#div_banner > #div_menu {
		width: 70%;
		height: auto;
		padding-left: 365px;
		position: absolute;
		top: 40px;
	}
	#table{
		width: 100%;
		border: 3px groove blue;
		text-align: center;
		height: auto;
		font-size: 20px;
	}
		.nut_dk_2{
		text-decoration: none;
		border: 2px groove yellow;
		 background-color: red;
		 font-size: 5px;
		height: auto;
		width: 20%;
		text-align: center;
		/*margin-top: 10px;*/
		position: absolute;
		top: 70px;
		right: 40px;
	}
	
</style>
<body>
	<?php include '../access_admin/check_login_admin.php' ?>
	<script type="text/javascript">
		<?php if(isset($_GET['delete'])){ ?>
			alert('Xóa tài khoản thành công');
		<?php } ?>
	</script>
	<script type="text/javascript">
		<?php if(isset($_GET['error_superadmin'])){ ?>
			alert('Bạn cần đăng nhập bằng tài khoản Super Admin!!');
		<?php } ?>
	</script>
	
	<?php require '../../connect.php';
		$sql = "select * from khach_hang";
		$result = mysqli_query($connect,$sql);
	  ?>
	  <div id="div_tong_admin">
		<div id="div_banner">
			<div class="nut_dk_2">
				<a href="../index.php" style="font-size: 18px;">quay lại trang chủ quản lí</a>
			</div>
			<div id="div_logo">
				<a href="http://localhost/doAn_1/trang_chu/index.php">
					<img src="../../banner_and_slide/logo24h.png" style="width: 100%;height: 50px;image-rendering: pixelated;">
				</a>
				
			</div>
			<div id='div_menu'>
				<?php include 'menu.php' ?>
			</div>
		</div>
		<div>
			<a href="../../dangkiuser/index.php" id="nut_dk">thêm tài khoản khách hàng</a>
		</div>
		<br>
		<div id="table">
			<table width="100%" border="2px">
	  	<th>Tên Đăng Nhập</th>
	  	<th>Email</th>
	  	<th>Tên</th>
	  	<th>Ngày sinh</th>
	  	<th>Giới tính</th>
	  	<th>Chỉnh sửa khách hàng</th>
	  	<?php foreach ($result as $each): ?>
	  		<tr>
	  			<td>
	  				<?php echo $each['tai_khoan']; ?>
	  			</td>
	  			<td>
	  				<?php echo $each['email']; ?>
	  			</td>
	  			<td>
	  				<?php echo $each['ten']; ?>
	  			</td>
	  			<td>
	  				<?php echo date_format(date_create($each['ngay_sinh']),'d-m-Y') ?>
	  			</td>
	  			<td>
	  				<?php echo $each['gioi_tinh']; ?>
	  			</td>
	  		
	  			<td>
	  				<a style='text-decoration: underline; color:red; ' href="view_update_kh.php?ma=<?php echo $each['ma'] ?>">Sửa</a>,
	  				<a onclick='return check_delete()' style='text-decoration: underline; color:red; ' href="process_delete_kh.php?ma=<?php echo $each['ma'] ?>">Xóa</a>
	  			</td>
	  		</tr>
	  	<?php endforeach ?>
	  	<?php mysqli_close($connect) ?>
	  </table>
		</div>
	  <script type="text/javascript">
	  	function check_delete(){
	  		if(confirm('Xác nhận xóa tài khoản??')){

	  		}else{
	  			return false;
	  		}
	  	}
	  </script>
</body>
</html>
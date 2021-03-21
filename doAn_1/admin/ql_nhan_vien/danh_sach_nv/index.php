<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<title>danh sách nhân viên</title>
	<meta charset="utf-8">
</head>
<style type="text/css">
	#div_banner{
		width: 100%;
		height: 12%;
		margin: all;
		background-image: url('../../../banner_and_slide/banner2.jpg');
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
	#link{
		position: absolute;
		z-index: 99;
		right: 10px;
		top: 20px;
	}
	.nut_dk{
		text-decoration: none;
		border: 2px groove yellow;
		 background-color: red;
		 font-size: 20px;
		height: auto;
		width: 90%;
		/*position: absolute;*/
		top: 20px;
		right: 40px;
		text-align: center;
	}
	.nut_dk_2{
		text-decoration: none;
		border: 2px groove yellow;
		 background-color: red;
		 font-size: 5px;
		height: auto;
		width: 100%;
		text-align: center;
		margin-top: 20px;
		/*position: absolute;*/
		/*top: 30px;
		right: 40px;*/
	}
</style>
<body>
	<div id="div_tong_admin">
		<div id="div_banner">
			<div id="link">
				<div class="nut_dk">
					<a href="../index.php" style="font-size: 18px;">Thêm nhân viên</a>
				</div>
				<div class="nut_dk_2">
					<a href="../../index.php" style="font-size: 18px;">quay lại trang chủ quản lí</a>
				</div>
			</div>
			
	
			<div id="div_logo">
				<img src="../../../banner_and_slide/logo24h.png" style="width: 100%;height: 50px;image-rendering: pixelated;">
			</div>
			<div id='div_menu'>
				<?php include '../../danh_sach_kh/menu.php' ?>
			</div>
		</div>
	
	<?php require '../../../connect.php';
		$sql = "select * from nhan_vien";
		$result = mysqli_query($connect,$sql);
		$each_cap_do = mysqli_fetch_array($result);
	  ?>

	  <table width="100%" border="1">
	  	<th>tên nhân viên</th>
	  	<th>email</th>
	  	<th>giới tính</th>
	  	<th>tài khoản nhân viên</th>
	  	<th>ngày sinh</th>
	  	<th>cấp độ</th>
	  	<?php 
	  		if($each_cap_do['cap_do']== 'superadmin'){ ?>
				<th>chỉnh sửa nhân viên</th>
	  		<?php } ?>
	  	<?php foreach ($result as $each): ?>
	  		<tr>
	  			<td>
	  				<?php echo $each['ten']; ?>
	  			</td>
	  			<td>
	  				<?php echo $each['email_nv']; ?>
	  			</td>
	  			<td>
	  				<?php echo $each['gioi_tinh']; ?>
	  			</td>
	  			<td>
	  				<?php echo $each['tai_khoan_nhan_vien']; ?>
	  			</td>
	  			<td>
	  				<?php echo $each['ngay_sinh']; ?>
	  			</td>
	  			<td>
	  				<?php echo $each['cap_do']; ?>
	  			</td>
		  			<?php if($each['cap_do']== 'superadmin'){ ?>
		  				<td></td>
		  			<?php }else{ ?>
		  				<td>
		  					<a href="view_update_nv.php?ma=<?php echo $each['ma'] ?>">sửa</a>,
		  					<a href="process_delete_nv.php?ma=<?php echo $each['ma'] ?>">xóa</a>
		  				</td>
		  		<?php } ?>	

	  		</tr>
	  	<?php endforeach ?>
	  	<?php mysqli_close($connect) ?>
	  </table>
</body>
</html>
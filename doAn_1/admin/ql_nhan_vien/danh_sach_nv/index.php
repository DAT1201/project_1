<?php if(session_status() == PHP_SESSION_NONE){
    session_start();
}
?>
<?php include '../../access_admin/check_superadmin.php'; ?>
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
	table{
	width: 100%;
	text-align: center;
	border: 3px groove blue;;
	height: auto;
	font-size: 20px; 
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
				<a href="http://localhost/doAn_1/trang_chu/index.php">
					<img src="../../../banner_and_slide/logo24h.png" style="width: 100%;height: 50px;image-rendering: pixelated;">
				</a>
				
			</div>
			<div id='div_menu'>
				<?php include 'menu.php' ?>
			</div>
		</div>
	
	<?php require '../../../connect.php';
		$sql = "select * from nhan_vien";
		$result = mysqli_query($connect,$sql);
		$each_cap_do = mysqli_fetch_array($result);
	  ?>

	  <table width="100%" border="1">
	  	<th>Tên nhân viên</th>
	  	<th>Email</th>
	  	<th>Giới tính</th>
	  	<th>Tài khoản nhân viên</th>
	  	<th>Ngày sinh</th>
	  	<th>Cấp độ</th>
	  	<?php 
	  		if($each_cap_do['cap_do']== 'superadmin'){ ?>
				<th>Chỉnh sửa nhân viên</th>
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
		  					<a style='text-decoration: underline; color:red; ' href="view_update_nv.php?ma=<?php echo $each['ma'] ?>">Sửa</a>,
		  					<a style='text-decoration: underline; color:red; ' onclick='return check_delete()' href="process_delete_nv.php?ma=<?php echo $each['ma'] ?>">Xóa</a>
		  				</td>
		  		<?php } ?>	

	  		</tr>
	  	<?php endforeach ?>
	  	<?php mysqli_close($connect) ?>
	  </table>
	  <script type="text/javascript">
	  	function check_delete(){
	  		if(confirm('Xác nhận xóa??')){

	  		}else{
	  			return false;
	  		}
	  	}
	  </script>
</body>
</html>
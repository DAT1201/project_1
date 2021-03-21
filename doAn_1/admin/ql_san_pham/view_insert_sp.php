<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<?php include '../access_admin/check_login_admin.php'; ?>
	<style type="text/css">
		.select{
			text-align: center;
			font-size: 20px;
			width: 50%;
			height: 30px;
		}
		.input{
			text-align: center;
			font-size: 20px;
			width: 98%;
			height: 30px;	
		}
		#table{
	width: 60%;
	margin: auto;
	text-align: center;
	border: 3px groove blue;;
	height: auto;
		font-size: 20px; 
}
	#nut_dk{
		text-decoration: none;
		border: 2px groove yellow;
		 background-color: red;
		 font-size: 20px;
		height: auto;
		width: 17%;
		position: absolute;
		top: 20px;
		right: 40px;
	}
	.error{
		color: red;
		font-size: 20px;
	}
	</style>
	<?php 
	include '../../connect.php';
	$sql = "select * from rank";
	$result = mysqli_query($connect,$sql);
	$sql_dm= "select * from danh_muc";
	$result_dm = mysqli_query($connect,$sql_dm);

	 ?>
	 <div>
	 	<?php include 'header_ql_sp.php'; ?>
	 	<div>
			<a href="index.php" id="nut_dk">xem toàn bộ sản phẩm</a>
		</div>
	 </div>
	<div>
		<form action="process_insert_sp.php" method="POST" enctype="multipart/form-data">
			<table id="table" border="1">
				<input type="hidden" name="ma_nick" value="<?php echo $ma_nick ?>">
				<tr>
					<td width="20%;">tài khoản nick: </td>
					<td>
						<input type="text" id="tai_khoan" name="tai_khoan" placeholder="nhập tài khoản nick" class="input">
						<span class="error" id="error_tai_khoan">
							<?php
								if(isset($_GET['error_add'])){
									echo "tài khoản này đã tồn tại";
								}
							 ?>
						</span>
					</td>
				</tr>
				<tr>
					<td width="20%;">mật khẩu nick: </td>
					<td>
						<input type="text" id="mat_khau" name="mat_khau" placeholder="mật khẩu nick" class="input">
						<span class="error" id="error_mat_khau"></span>
					</td>
				</tr>
				<tr>
					<td>Gía:</td>
					<td>
						<input type="number" id="gia" name="gia" placeholder="nhập giá" class="input" min='0'>
						<span class="error" id="error_gia"></span>
					</td>
				</tr>
				<tr>
					<td>ảnh:</td>
					<td>
						<input type="file" id="anh" name="anh" style="font-size: 20px;">
						<span class="error" id="error_anh"></span>
					</td>
				</tr>
				<tr>
					<td>rank:</td>
					<td>
						<select name="ma_rank" class="select">
							<?php 
								foreach ($result as  $each): ?>
									<option value="<?php echo $each['ma']  ?>">
										<?php echo $each['rank'] ?>
									</option>
								<?php endforeach ?>
						</select>
					</td>
				</tr>
				<tr>
					<td>danh muc:</td>
					<td>
						<select name="ma_danh_muc" class="select">
							<?php 
								foreach ($result_dm as $each_dm): ?>
									<option value="<?php echo $each_dm['ma']  ?>">
										<?php echo $each_dm['tieu_de_danh_muc'] ?>
									</option>
								<?php endforeach ?>
						</select>
					</td>
				</tr>
				<tr>
					<td colspan="2"> 
						<button style="font-size: 25px;width: 20%;background-color: red;" onclick="return check_sp()">Đăng</button>
					</td>
				</tr>
				
			</table>
		</form>
	</div>
	<?php mysqli_close($connect); ?>
	<script type="text/javascript" src="view_insert_sp.js"></script>
</body>
</html>
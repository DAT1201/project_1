<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<?php 
		$ma= $_GET['ma'];
		// $ma_nick= $_GET['ma_nick'];
		$thu_muc_danh_muc_anh_sp = '../../anh_san_pham/';
		include '../../connect.php';
		$sql_sp = "select * from thong_tin_nick where ma='$ma'";
		$result_sp = mysqli_query($connect,$sql_sp);
		$each_sp = mysqli_fetch_array($result_sp);

		$sql_rank="select * from rank";
		$result_rank=mysqli_query($connect,$sql_rank);

		$sql_dm="select * from danh_muc";
		$result_dm=mysqli_query($connect,$sql_dm);

	 ?>
	<div>
		<form action="process_update_sp.php" method="POST" enctype="multipart/form-data">
			<input type="hidden" name="ma" value="<?php echo $ma ?>">
			<table>
				<tr>
					<td>Tài khoản nick:</td>
					<td>
						<input type="text" name="tai_khoan" id="tai_khoan_nick" value="<?php echo $each_sp["tai_khoan"] ?>" required />
					</td>
				</tr>
				<tr>
					<td>Mật khẩu nick:</td>
					<td>
						<input type="text" name="mat_khau" value="<?php echo $each_sp["mat_khau"] ?>" required />
					</td>
				</tr>
				<tr>
					<td>Giá:</td>
					<td>
						<input type="number" name="gia" min='0' value="<?php echo $each_sp["gia"] ?>" required />
					</td>
				</tr>
				<tr>
					<td>Ảnh cũ:</td>
					<td>
						<input type="hidden" name="anh_cu" value="<?php echo $each_sp['anh'] ?>">
						<img style="height: 200px;" src="<?php echo $thu_muc_danh_muc_anh_sp . $each_sp['anh'] ?>">
					</td>
				</tr>
				<tr>
					<td>Ảnh mới:</td>
					<td>
						<input type="file" accept="image/*" name="anh_moi">
					</td>
				</tr>
				<tr>
					<td>Rank:</td>
					<td>
						<select name="ma_rank">
							<?php 
								foreach ($result_rank as  $each_rank): ?>
									<option value="<?php echo $each_rank['ma']  ?>"
										 <?php if($each_rank['ma'] == $each_sp['ma_rank']) echo "selected"; ?>
										>
										<?php echo $each_rank['rank'] ?>
									</option>
								<?php endforeach ?>
						</select>
					</td>
				</tr>
				<tr>
					<td>Danh muc:</td>
					<td>
						<select name="ma_danh_muc">
							<?php 
								foreach ($result_dm as $each_dm): ?>
									<option value="<?php echo $each_dm['ma']  ?>"
										<?php if($each_dm['ma'] == $each_sp['ma_danh_muc']) echo "selected"; ?>
										>
										<?php echo $each_dm['tieu_de_danh_muc'] ?>
									</option>
								<?php endforeach ?>
						</select>
					</td>
				</tr>
				<tr>
					<td colspan="2"> 
						<button onclick=" return check()">sửa</button>
					</td>
				</tr>
				
			</table>
		</form>
	</div>
	<?php mysqli_close($connect) ?>
</body>
</html>
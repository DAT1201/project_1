<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<title>quan li danh muc</title>
	<meta charset="utf-8">
</head>
<link rel="stylesheet" type="text/css" href="ql_danh_muc.css">
<body>
	<?php include '../access_admin/check_login_admin.php'; ?>
	<?php 
		include '../../connect.php';
		$sql = "select * from danh_muc";
		$result = mysqli_query($connect,$sql);
		$thu_muc_anh_danh_muc = '../../anh_danh_muc_sp/';
		// dem tong sp
		$tong_sp = mysqli_num_rows($result);
		$so_sp_1_trang = 9;
		$tong_so_trang = ceil($tong_sp / $so_sp_1_trang);
		// $bo_qua_sp 
		$trang_hien_tai =1 ;
		if(isset($_GET['trang'])){
			$trang_hien_tai= $_GET['trang'];
		}
		$bo_qua_sp = ($trang_hien_tai - 1) * $so_sp_1_trang;
		$sql = " $sql limit $so_sp_1_trang offset $bo_qua_sp; ";
		$result = mysqli_query($connect,$sql);
	 ?>
	 <div id="div_tong_admin">
		<div id="div_banner">
			<div class="nut_dk_2">
				<a href="../index.php" style="font-size: 18px;">quay lại trang chủ quản lí</a>
			</div>
			<div id="div_logo">
				<img src="../../banner_and_slide/logo24h.png" style="width: 100%;height: 50px;image-rendering: pixelated;">
			</div>
			<div id='div_menu'>
				<?php include '../danh_sach_kh/menu.php' ?>
			</div>
		</div>
		<div>
			<a href="view_insert_danh_muc.php" id="nut_dk">Đăng danh mục</a>
		</div>
		<div>
					<h1>danh sách danh mục</h1>
			 <h1>
			 	Tổng sản phẩm:<?php echo $tong_sp; ?>
			 </h1>
			 <h3>
			 	tổng số trang: <?php echo $tong_so_trang ?>
			 	<br>
			 	9 danh mục / 1 trang! 
			 	<br>
			 	<?php for($i=1; $i <= $tong_so_trang;$i++){ ?>
			 		<a href="?trang=<?php echo $i ?>">
			 			<?php echo $i; ?>
			 		</a>
			 	<?php } ?>
			 </h3>
		</div>
	 

	 <table id="table" border="2px">
	 	<th>tiêu đề danh mục</th>
	 	<th>ảnh</th>
	 	<th>chỉnh sửa</th>
	 	<tr>
	 		<?php foreach ($result as $each): ?>
	 		<td>
	 			<?php echo $each['tieu_de_danh_muc'] ?>
	 		</td>
	 		<td>
	 			<img style="height: 200px;" src="<?php echo $thu_muc_anh_danh_muc . $each['anh_danh_muc'] ?>">
	 		</td>
	 		<td>
	 			<a href="view_update_danh_muc.php?ma=<?php echo $each['ma'] ?>">sửa</a>,
				<a href="process_delete_danh_muc.php?ma=<?php echo $each['ma'] ?>">xóa</a>
	 		</td>
	 	</tr>
	 <?php endforeach ?>
	 </table>
	 <?php mysqli_close($connect); ?>
</body>
</html>
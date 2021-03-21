<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>thong_ke</title>
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
		top: 50px;
		right: 40px;
	}
</style>
<body>
<?php include '../access_admin/check_login_admin.php'; ?>
<div id='div_tong_admin'>
		<div id="div_banner">
			<div class="nut_dk_2">
				<a href="../index.php" style="font-size: 18px;">quay lại trang chủ quản lí</a>
			</div>
			<div id="div_logo">
				<img src="../../banner_and_slide/logo24h.png" style="width: 100%;height: 50px;image-rendering: pixelated;">
			</div>
			<div id='div_menu'>
				<?php include '../ql_don_hang/menu.php' ?>
			</div>
		</div>
		<?php 
			include '../../connect.php';
			$sql = "select 
			SUM(if(hoa_don.tinh_trang=2 ,thong_tin_nick.gia,0)) as tong_doanh_thu,
			SUM(if(hoa_don.tinh_trang=2,thong_tin_nick.gia,0)) as doanh_thu_thang,
					SUM(if(hoa_don.tinh_trang=1,thong_tin_nick.gia,0)) as doanh_thu_du_kien,
					sum(hoa_don.tinh_trang=2 AND hoa_don.ma_hoa_don) as so_luong_da_ban,
					SUM(hoa_don.tinh_trang=1 AND hoa_don.ma_hoa_don) AS so_luong_du_kien_ban,
					month(thoi_gian_mua) as thang_hien_tai,
					year(thoi_gian_mua) as nam_hien_tai
					 from hoa_don
					join thong_tin_nick on thong_tin_nick.ma = hoa_don.ma_nick
					WHERE month(thoi_gian_mua)
					and year(thoi_gian_mua) GROUP BY month(thoi_gian_mua) order by year(thoi_gian_mua) DESC";
			$result = mysqli_query($connect,$sql);
			// $each_ds=mysqli_fetch_array($result);
			$tong_ds=0;
			$tong_da_ban=0;
		 ?>
		<table border="1" width="100%" style="text-align: center;">
			<th>Doang thu theo tháng</th>
			<th>Số lượng đã bán</th>
			<th>Doanh thu dự kiến</th>
			<th>số lượng dự kiến bán</th>
			<th>tháng</th>
			<?php foreach ($result as $each): ?>
				<tr>
					<td>
						<?php echo $each['doanh_thu_thang']; ?>
					</td>
					<td>
						<?php echo $each['so_luong_da_ban']; ?>
					</td>
					<td>
						<?php echo $each['doanh_thu_du_kien']; ?>
					</td>
					<td>
						<?php echo $each['so_luong_du_kien_ban']; ?>
					</td>
					<td>
						<?php echo $each['thang_hien_tai']; ?>-
						<?php echo $each['nam_hien_tai']; ?>
					</td>
					<?php 
						$tong_ds += $each['doanh_thu_thang'];
						$tong_da_ban += $each['so_luong_da_ban'];

					 ?>
				</tr>
			<?php endforeach ?>
		</table>
		<h1>Tổng doanh thu: <?php echo "$tong_ds"; ?></h1>
		<h1>Số lượng tài khoản đã bán: <?php echo "$tong_da_ban"; ?></h1>
</body>
</html>
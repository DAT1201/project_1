<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>gio hang</title>
	<meta charset="utf-8">
</head>
<style type="text/css">
	th{
		font-size: 20px;
	}
	#div_tong{
			width: 100%;
			/*height:auto;*/
			/*position: fixed;*/
			background-image: url('../banner_and_slide/nen_tong.jpg');
			background-size: cover;
			background-position: center center;
				/*position: relative;*/
		}
		#div_tong > #xem_gio_hang{
			z-index: 1;
			top: 100px;
			width: 100%;
			/*margin-top: 200px;*/
			/*position: fixed;*/
			padding-top: 120px;
			/*height: 300px;*/
		}
		#button:hover{
			background-color: yellow;
			color: red;
		}
		#button{
			font-size: 20px;
			background-color: red;
			color: yellow;
			font-weight: bold;
		}
		.input{
			width:100%;
			height:30px;
		}
</style>
<link rel="stylesheet" type="text/css" href="../common/tai_khoan_lien_quan.css">
<body>
	<script type="text/javascript">
			<?php 
				if(isset($_GET['thong_bao_sp'])){ ?>
				alert('Tài khoản này đã có người mua, xin hãy chọn tài khoản khác');
		<?php } ?>
		</script>
	<?php
	 include'../connect.php';
		$thu_muc_danh_muc_anh_sp = '../anh_san_pham/';
		$tong_tien = 0;
		$ma = $_SESSION['ma'];
		$sql_kh = "select khach_hang.ten,khach_hang.tai_khoan,khach_hang.email from khach_hang  where ma ='$ma'";
		$result_kh = mysqli_query($connect,$sql_kh);
		$each_kh = mysqli_fetch_array($result_kh);
		
	 ?>
	<div id="div_tong">
					<?php include 'banner.php' ?>
			<div id="xem_gio_hang">
				<?php if(empty($_SESSION['gio_hang'])){ ?>
						<div style="font-size: 20px; font-weight: bold;color: red;text-align: center;">
							<?php echo "bạn chưa chọn nick nào! vui lòng chọn nick!" ?>
							<a href='../trang_chu/index.php'>Trở lại trang chủ</a>
						</div>
					<?php }else{ ?>
			<form  action="process_xac_nhan.php" method="POST">
				<h1 style='margin-left: 0px; text-align: center; background-color: #b8b894; color: red;'>Giỏ hàng</h1>
				<table  border='1' style='border:outset 2px yellow; width:100%; text-align: center;'>
					<tr>
						<th>Mã Nick</th>
						<th>Ảnh</th>
						<th>Giá</th>
						<th>Thuộc tính</th>
						<th>Xóa khỏi giỏ</th>
					</tr>
						<?php foreach ($_SESSION['gio_hang'] as $ma_sp => $so_luong): ?>
						<?php 
							$sql = "select * from thong_tin_nick where ma='$ma_sp'";
							$result = mysqli_query($connect,$sql);
							$each = mysqli_fetch_array($result);
							
						 ?>
						<tr>
							<td>
						<?php echo $each['ma'] ?>
							</td>
							<td>
								<img style="height: 80px;" src="<?php echo $thu_muc_danh_muc_anh_sp . $each['anh'] ?>">
							</td>
							<td>
								<?php echo number_format($each["gia"]) ?>.VND
								<?php $tong_tien+= $each["gia"]; ?>
							</td>
							<td>
								<?php 
						$ma = $each['ma'];
						$sql="select * from thuoc_tinh";
							$result_tt=mysqli_query($connect,$sql);
							
			 			?>
						<div>
							<?php foreach ($result_tt as $each_tt): ?>
								<?php 
									$ma_thuoc_tinh=$each_tt['ma'];
									$sql_gt="select*from gia_tri_thuoc_tinh where ma_nick='$ma' and ma_thuoc_tinh='$ma_thuoc_tinh'";
							$result_gt=mysqli_query($connect,$sql_gt);
							$each_gt=mysqli_fetch_array($result_gt);
								 ?>
								<span>
									<?php echo $each_tt['ten_thuoc_tinh'] ?>: <?php echo $each_gt['gia_tri'] ?>
						 		</span>
							<br><?php endforeach ?>
						</div>
							</td>
							<td>
								<a style='color:red; text-decoration: underline; ' href="delete_sp.php?ma=<?php echo $ma_sp ?>" onclick='return check()'>Xóa</a>
							</td>
						</tr>
					<?php endforeach ?>
					<tr>
						<td colspan="9">
							<h1>Tổng Tiền: <?php echo number_format($tong_tien) ?>.VND</h1>
						</td>
					</tr>
				</table>
				<h1 style='background-color: #ff8533; margin-left: 0px; padding-left: 30px;'>Thông tin khách hàng</h1>
						<table style='border:outset 2px; padding-left: 30px; margin-left: 30px; width: 30%'>
							<tr>
								<td>Tên khách hàng:</td>
								<td>
			  						<input class='input' type="text" name="ten_nguoi_mua" value="<?php echo $each_kh['ten'] ?> " readonly> 
			  					</td>
							</tr>
							<tr>
								<td>Email:</td>
								<td>
									 <input class='input' type="text" name="email" value="<?php echo $each_kh['email'] ?>" readonly>
								</td>
							</tr>
							<tr>
								<td>Tên đăng nhập:</td>
								<td>
									<input class='input' type="text" name="tai_khoan" value="<?php echo $each_kh['tai_khoan'] ?>" readonly>
								</td>
							</tr>
							<tr>
								<td>Số tiền phải trả:</td>
								<td>
									<b><?php echo number_format($tong_tien) ?>.VND</b>
								</td>
							</tr>
							<tr>
								<td style="text-align: center;" colspan="2">
									<button id='button'>Xác nhận</button>
								</td>
							</tr>
						</table>
			</form>
				
				<?php } ?>
					<div>
						<a href="../thanh_toan/index.php" style="color: blue;position: absolute;z-index: 99;right: 10px;text-decoration: underline;">Đi đến mục thanh toán>>></a>
					</div>
					
			</div>
			<br>
			<br>
			<div>
				<h1 style='text-align: center; width:100%; margin-left: 0px; background-color: #b8b894'>
							Bạn có thể thích
				</h1>
				<?php include '../common/tai_khoan_lien_quan.php' ?>
			</div>	
	</div>
	<?php mysqli_close($connect); ?>
	<script type="text/javascript">
		function check(){
			if(confirm('Xóa khỏi giỏ hàng??')){

			}else{
				return false;
			}
		}
	</script>
</body>
</html>
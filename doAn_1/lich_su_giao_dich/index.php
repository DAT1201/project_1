<?php session_start() ?>
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
</style>
<body>
	<?php
	 include'../connect.php';
		$thu_muc_danh_muc_anh_sp = '../anh_san_pham/';
		$tong_tien = 0;
		if(isset($_SESSION['ma'])){
			$ma = $_SESSION['ma'];
			$sql = "select * from hoa_don join thong_tin_nick on hoa_don.ma_nick = thong_tin_nick.ma where ma_khach_hang = '$ma'";
			$result = mysqli_query($connect,$sql);
		}
		
	 ?>
	<div id="div_tong">
					<?php include 'banner.php' ?>
					<div id="xem_gio_hang">
				<table border="1" width="100%" style="text-align: center;">
					<?php include '../trang_chu/chu_ngang.php'; ?>
					<h1 style="text-align: center;color: red">Lịch sử giao dịch</h1>
					<?php 
					if(isset($_SESSION['ma'])){
					?>
					<tr>
						
						<th>Tên Người mua</th>
						<th>Thời gian mua</th>
						<th>Mã Nick</th>
						<th>Giá</th>
						<th>Trạng thái</th>
						<!-- <th>tài khoản nick</th>
						<th>mật khẩu nick</th> -->
						
					</tr>
					<?php foreach ($result as $each): ?>
					<tr>
						<td>
							<?php echo $each['ten_nguoi_mua'] ?>	
						</td>	
						<td>
							<?php echo date_format(date_create($each['thoi_gian_mua']),'H:i:s d-m-Y') ?>
						</td>
						<td>
							<?php echo $each['ma_nick'] ?>
						</td>
						<td>
							<?php echo $each['gia'] ?>
						</td>
						<td>
							<?php 
								if($each['tinh_trang']==1){
									echo "Đang chờ duyệt";
								}else if($each['tinh_trang']==2){
									echo "Giao dịch thành công";
								}elseif($each['tinh_trang']==3){
									echo "Đơn hàng đã bị hủy";
								}
							 ?>
						</td>
						<!-- <td>
							<?php 
								if($each['tinh_trang']==1){
									echo "Đang chờ duyệt";
								}else if($each['tinh_trang']==2){
									echo $each['tai_khoan'];
								}elseif($each['tinh_trang']==3){
									echo "Đơn hàng đã bị hủy";
								}
							 ?>
						</td>
						<td>
							<?php 
								if($each['tinh_trang']==1){
									echo "Đang chờ duyệt";
								}else if($each['tinh_trang']==2){
									echo $each['mat_khau'];
								}elseif($each['tinh_trang']==3){
									echo "Đơn hàng đã bị hủy";
								}
							 ?>
						</td> -->
					</tr>
	<?php endforeach ?>
	<?php }else{ ?>
		<p style='text-align: center; font-size: 30px; color:black; '>
			<?php echo "Bạn chưa thực hiện giao dịch" ?>
		</p>
	<?php } ?>
				</table>
				</div>
	</div>
<?php mysqli_close($connect); ?>
</body>
</html>
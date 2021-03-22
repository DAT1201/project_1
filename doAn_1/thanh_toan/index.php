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
</style>
<body>
	<?php
	 include'../connect.php';
		$thu_muc_danh_muc_anh_sp = '../anh_san_pham/';
		$tong_tien = 0;
		$ma = $_SESSION['ma'];
		$sql = "select * from hoa_don join thong_tin_nick on hoa_don.ma_nick = thong_tin_nick.ma where ma_khach_hang = '$ma'";
		$result = mysqli_query($connect,$sql);
	 ?>
	<div id="div_tong">

					<?php include 'banner.php' ?>
					<div id="xem_gio_hang">
				<table border="1" width="100%" style="text-align: center;">
					<tr>
						
						<th>Tên Người mua</th>
						<th>Mã tài khoản</th>
						<th>Trạng thái</th>
						<th>Giá</th>
						<th>Hủy</th>
						
					</tr>
					<?php foreach ($result as $each): ?>
					<tr>
						<td>
							<?php echo $each['ten_nguoi_mua'] ?>	
						</td>
						<td>
							<?php echo $each['ma_nick'] ?>
						</td>
						<td>
							<?php 
								if($each['tinh_trang']==1){
									echo "Đang chờ duyệt";
								}else if($each['tinh_trang']==2){
									echo "Đã được duyệt";
								}elseif($each['tinh_trang']==3){
									echo "Đơn hàng đã bị hủy";
								}
							 ?>
						</td>
						<td>
							<?php echo number_format($each['gia']) ?>
							<?php $tong_tien += $each['gia']; ?>
						<sup>đ</sup>
						</td>
						
						<td>
							<?php if($each['tinh_trang']==1){ ?>
								<a style='text-decoration:underline; color:red; ' href="huy_thanh_toan.php?ma_hoa_don=<?php echo $each['ma_hoa_don'] ?>&tinh_trang=2" onclick='return check_huy()'>Hủy</a>
							<?php }?>
							
						</td>
					</tr>

	<?php endforeach ?>
					
					<td colspan="7" style="font-weight: bold;">
						TỔNG TIỀN CẦN THANH TOÁN: <?php echo number_format($tong_tien) ?>
						<sup>đ</sup>
						<br>
						<p>
							<a href="" style="font-size: 15px; color: blue;text-decoration:underline; ">nếu không đủ tiền vui lòng nạp thẻ tại đây</a>
						</p>
						
					</td>
					</table>
					
					
				</div>
	</div>
					<?php mysqli_close($connect); ?>
<script type="text/javascript">
	function check_huy(){
		if(confirm('Bạn có chắc muốn hủy thanh toán?')){

		}else{
			return false;
		}
	}
	function check_thanh_toan(){
		if(confirm('Bạn có chắc muốn thanh toán')){

		}else{
			return false;
		}
	}
</script>
</body>
</html>
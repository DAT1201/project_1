<?php include '../accessUser/check_user.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<style type="text/css">
		#div_tong{
			width:100%;
			height:100%;
			/*background-image: url('../banner_and_slide/displays_1200x630.jpg');
			background-size: cover;*/
		}
		#content{
			width:100%;
			height:600px;
			position:relative;
			text-align:center;
			background-image: url('../banner_and_slide/displays_1200x630.jpg');
			background-size: cover;
			background-position: center center;
		}
		#qltk{
			margin:auto;
			width:100%;
			border:solid black 1px;
			font-weight:bold;
			font-size:30px;
			background-color:lightblue;
			opacity: 0.8;
		}
		.option{
			margin:auto;
			height:45px;
			float:left;
			width:49.85%;
			border:solid black 1px;
			padding-top:15px;
			background-color: lightgreen;
			opacity: 0.8;
		}
		.thay_doi{
			font-weight: bold;
			font-size: 24px;
			opacity: 0.8;
		}
		.thay_doi:hover{
			background-color: #ddd;
		}
	</style>
</head>
<body>
	<script type="text/javascript">
		<?php 
		if(isset($_GET['thong_bao_dmk'])){ ?>
		alert('Đổi mật khẩu thành công');
		<?php } ?>
	</script>
	<script type="text/javascript">
		<?php 
		if(isset($_GET['doi_thong_tin'])){ ?>
		alert('Đổi thông tin thành công');
		<?php } ?>
	</script>
  <?php
    include '../connect.php';
    if(isset($_SESSION['ma'])){
    $ma_khach_hang = $_SESSION['ma'];
    $sql = "select * from khach_hang where ma='$ma_khach_hang'";
    $result = mysqli_query($connect, $sql);
    $each = mysqli_fetch_array($result);
    }
?>
	
<?php 
	include '../connect.php';
	$sql_kh = "select * from khach_hang where ma = '$ma_khach_hang'";
	$result_kh = mysqli_query($connect, $sql_kh);
	$each_kh = mysqli_fetch_array($result_kh);
?>
<div id='div_tong'>
	<?php include '../trang_chu/banner.php'; ?>
	<?php include 'promote.php'; ?>
	<div id='content'>
		<div id='qltk'>
			Quản lý tài khoản
		</div>
		<div>
			
			<table border='1' style='margin:auto; text-align: left; width:30%; background-color: rgba(255, 255, 51, 0.8);' >
				<tr>
					<td width='40%'>
						<input type="hidden" name="ma_khach_hang" value='<?php echo $ma_khach_hang ?>'>
						Tên khách hàng:
					</td>
					<td>
						<?php echo $each_kh['ten'] ?>
					</td>
				</tr>
				<tr>
					<td>
						Ngày sinh:
					</td>
					<td>
						<?php $ngay_sinh = date_create($each_kh['ngay_sinh']) ?>
						<?php echo date_format($ngay_sinh,"d-m-Y") ?>
					</td>
				</tr>
				<tr>
					<td>
						Giới tính:
					</td>
					<td>
						<?php echo $each_kh['gioi_tinh'] ?>
					</td>
				</tr>
				<tr>
					<td>
						Email:
					</td>
					<td>
						<?php echo $each_kh['email'] ?>
					</td>
				</tr>
				<tr>
					<td colspan="2" style='text-align: center;'>
						<?php include 'view_doi_thong_tin.php'; ?>
						<?php include 'view_doi_mat_khau.php'; ?>
					</td>
				</tr>
			</table>
		</div>

</div>
</div>
</body>
</html>
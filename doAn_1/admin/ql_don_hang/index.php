<!-- <?php session_start(); ?> -->
<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

	#table{
	width: 100%;
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
		width: 11%;
		position: absolute;
		top: 20px;
		right: 40px;
	}
	#tim_kiem{
		height:42px;
		width: 30%;
		float: left;
		margin-left: 30px;
	}
	form.example{
		margin-top: 0px;
		background-color: #8B8E91;
		height: 100px;
		border: 3px groove yellow;
	}
	form.example input[type=text] {
	  /*padding: 10px;*/
	  font-size: 17px;
	  border: 1px solid grey;
	  float: left;
	  /*width: 80%;*/
	  background: #f1f1f1;


	}

	form.example button {
	  /*float: left;*/
	  width: 5%;
	  padding: 10px;
	  background: #2196F3;
	  color: white;
	  font-size: 17px;
	  border: 1px solid grey;
	  border-left: none;
	  cursor: pointer;
	}

	form.example button:hover {
	  background: #0b7dda;
	}

	form.example::after {
	  content: "";
	  clear: both;
	  display: table;
	}
	h1{
		margin: 0px;
		margin-left: 30px;
	}
</style>
<body>
<script type="text/javascript">
	<?php if(isset($_GET['error_huy_don_hang'])){ ?>
		alert('Đơn hàng đã được duyệt!!');
	<?php } ?>
	<?php if(isset($_GET['error_duyet_don_hang'])){ ?>
		alert('Đơn hàng đã bị hủy!!');
	<?php } ?>
</script>

<?php include '../access_admin/check_login_admin.php'; ?>
<?php include '../../connect.php'; ?>
<?php 
	$tim_kiem = '';
	if(isset($_GET['tim_kiem'])){
		$tim_kiem = $_GET['tim_kiem'];
	}
	$sql = "select hoa_don.*, thong_tin_nick.gia from hoa_don join thong_tin_nick on hoa_don.ma_nick = thong_tin_nick.ma where hoa_don.ma_khach_hang like '%$tim_kiem%' or hoa_don.ten_nguoi_mua like '%$tim_kiem%' or hoa_don.ma_hoa_don like '%$tim_kiem%' or hoa_don.ma_nick like '%$tim_kiem%' order by hoa_don.tinh_trang asc, hoa_don.thoi_gian_mua asc";
	$result = mysqli_query($connect, $sql);
?>


<div id='div_tong_admin'>
		<div id="div_banner">
			<div class="nut_dk_2">
				<a href="../index.php" style="font-size: 18px;">quay lại trang chủ quản lí</a>
			</div>
			<div id="div_logo">
				<a href="http://localhost/doAn_1/trang_chu/index.php">
					<img src="../../banner_and_slide/logo24h.png" style="width: 100%;height: 50px;image-rendering: pixelated;">
				</a>
				
			</div>
			<div id='div_menu'>
				<?php include '../danh_sach_kh/menu.php' ?>
			</div>
		</div>
		<h1 style="text-align: center;color: blue; ">Quản lý đơn hàng</h1>
		 <div>
		 	<form class="example"><h1>Tìm kiếm</h1>
			  <input id="tim_kiem" type="search" placeholder="Tìm kiếm theo mã hoặc tên..." name="tim_kiem" value="<?php echo $tim_kiem ?>">
			  <button><i class="fa fa-search"></i></button>
			</form>
		 </div>
		<div>
			<table border='2px' style='width: 100%; border: 3px groove blue; text-align: center; height: auto; font-size: 20px;'>
				
				<tr>
					<th>
						Mã khách hàng
					</th>
					<th>
						Tên khách hàng
					</th>
					<th>
						Mã nick
					</th>
					<th>
						Giá
					</th>
					<th>
						Tình trạng
					</th>
					<th>
						Thời gian mua
					</th>
					<th colspan="2">
						Duyệt/Hủy đơn hàng
					</th>
				</tr>
				<?php foreach ($result as $each) { ?>
					<tr>
						<td>
							<?php echo $each['ma_khach_hang'] ?>
						</td>
						<td>
							<?php echo $each['ten_nguoi_mua'] ?>
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
								}elseif($each['tinh_trang']==2){
									echo "Đã duyệt";
								}elseif($each['tinh_trang']==3){
									echo "Đã hủy";
								}
							?>
						</td>
						<td>
							<?php
							echo date_format(date_create($each['thoi_gian_mua']), 'H:i:s d-m-Y');
							?>
						</td>
					<?php if($each['tinh_trang']==1){ ?>
						<td>
							<a style='color:green; text-decoration:underline;' href="duyet_don_hang.php?ma_nick=<?php echo $each['ma_nick'] ?>&tinh_trang=2&ma_hoa_don=<?php echo $each['ma_hoa_don'] ?>">
								Duyệt
							</a>	
						</td>
						<td>
							<a onclick='return check()' style='color:red; text-decoration:underline;' href="huy_don_hang.php?ma_hoa_don=<?php echo $each['ma_hoa_don'] ?>">
								Hủy
							</a>
						</td>
					<?php }elseif($each['tinh_trang']==2){ ?>
						<td colspan="2">
							<?php echo "<b style='font-size:24px;'>Đã duyệt</b>" ?>
						</td>
					<?php }elseif($each['tinh_trang']==3){ ?>
						<td colspan="2">
							<?php echo "<b style='font-size:24px;'>Đã hủy</b>" ?>
						</td>
						<?php } ?>
					</tr>
				<?php } ?>
				
			</table>
		</div>
</div>
<script type="text/javascript">
	function check(){
		if(confirm('Xác nhận hủy đơn?')){

		}else{
			return false;
		}
	}
</script>
</body>
</html>
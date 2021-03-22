<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="san_pham_danh_muc.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
	body {
	  font-family: Arial;
	}

	* {
	  box-sizing: border-box;
	}
	h1{
		margin: 0px;
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
	#tim_kiem{
		height:42px;
		width: 30%;
		float: left;
		margin-left: 30px;
	}
	
	</style>
</head>
<body>

	<?php 
	include '../connect.php';
	$tim_kiem = '';
	if(isset($_GET['tim_kiem'])){
		$tim_kiem = $_GET['tim_kiem'];
	}
	
	$sql = "select thong_tin_nick.*,rank.rank,danh_muc.tieu_de_danh_muc from thong_tin_nick
JOIN danh_muc on danh_muc.ma = thong_tin_nick.ma_danh_muc
JOIN rank on rank.ma = thong_tin_nick.ma_rank
where thong_tin_nick.ma not in(
        SELECT 
        hoa_don.ma_nick
        FROM hoa_don where (hoa_don.tinh_trang=2 or hoa_don.tinh_trang=1)) and
       (rank.rank like '%$tim_kiem%' or thong_tin_nick.ma like '%$tim_kiem%')";
		if(isset($_GET['ma_danh_muc'])){
			$ma_danh_muc = $_GET['ma_danh_muc'];
			$sql = "$sql and ma_danh_muc = '$ma_danh_muc'";
		}	
		$thu_muc_danh_muc_anh_sp = '../anh_san_pham/';
		$result = mysqli_query($connect,$sql);
		// tong so
		$tong_sp = mysqli_num_rows($result);
		$so_sp_1_trang = 6;
		$tong_trang=ceil($tong_sp/$so_sp_1_trang);
		// bo qua
		$trang_hien_tai = 1;
		if(isset($_GET['trang'])){
			$trang_hien_tai = $_GET['trang'];
		}
			$bo_qua_sp = ($trang_hien_tai - 1)* $so_sp_1_trang;
			$sql = "$sql limit $so_sp_1_trang offset $bo_qua_sp";
			$result = mysqli_query($connect,$sql);
		

	 ?>
	 <div id="search">
		 	
			<form class="example"><h1>Tìm kiếm</h1>
			  <input id="tim_kiem" type="search" placeholder="Tìm kiếm theo rank hoặc mã số..." name="tim_kiem" value="<?php echo $tim_kiem ?>">
			  <button><i class="fa fa-search"></i></button>
			  <?php 
				 if(isset($_GET['ma_danh_muc'])){ ?>
						<input type="hidden" name="ma_danh_muc" value="<?php echo $_GET['ma_danh_muc'] ?>">
						<?php $ma_danh_muc = $_GET['ma_danh_muc']; ?>
			   <?php } ?>
			</form>
	 </div>
	<div id="div_san_pham">
		<script type="text/javascript">
			<?php if(isset($_GET['them_gio'])){ ?>
				alert('Thêm nick vào giỏ thành công! nhấn vào giỏ hàng để thanh toán.');
			<?php } ?>
		</script>
		<?php 
		 	$sql = "select * from hoa_don";
		 	mysqli_query($connect,$sql);
		  ?>
			<?php foreach ($result as $each): ?>
				<div class="san_pham">
					<div id="loai_sp">
						mã số: <?php echo $each['ma']; ?>
					</div>
					<div id="anh_sp">
						<a href="../chi_tiet_nick/index.php?ma=<?php echo $each['ma'] ?>&ma_danh_muc=<?php echo $ma_danh_muc ?>">
							<img  style="width: 90%;margin: auto;height: 200px;border: 3px groove yellow;" src="<?php echo $thu_muc_danh_muc_anh_sp .$each['anh'] ?>">
						</a>
						
					</div>
					<div id="mo_ta">
						<div style="font-weight: bold;">
							RANK ĐƠN:
							<span>
								<?php echo $each['rank'] ?>
							</span>
						</div>
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
									<i class="material-icons" style="font-size: 10px;">favorite</i>
									<?php echo $each_tt['ten_thuoc_tinh'] ?>: 
									<?php if(isset($each_gt['ma_nick'])){ ?>
									<?php echo $each_gt["gia_tri"] ?>
									<?php }else{ ?>
										<?php echo '' ?>
									<?php } ?>
						 		</span>
							<br><?php endforeach ?>
						</div>
					</div>
					<div id="gia">
						Giá:
						<?php echo number_format($each['gia'])?>
						<sup>đ</sup>
					</div>
					<div id="cuoi">
						<div class="chi_tiet">
							<div class="a" style="background-color: rgb(244, 0, 25,0.5);">
								<a href="../chi_tiet_nick/index.php?ma=<?php echo $each['ma'] ?>&ma_danh_muc=<?php echo $ma_danh_muc ?>">Chi tiết</a>
							</div>
							<div class="a" style="background-color: rgb(138, 254, 0,0.5);">
								<a href="../gio_hang/gio_hang.php?ma=<?php echo $each['ma'] ?>&ma_danh_muc=<?php echo $ma_danh_muc ?>">Thêm giỏ</a>
							</div>
							
						</div>
					</div>
				</div>
			<?php endforeach ?>
		<?php if($tong_sp ==0){ ?>
			<p style="text-align: center;color: red;font-size: 30px;">
			<?php echo "Hiện chưa có sản phẩm"; ?>
			</p>
		<?php }	?>
			<p style="text-align: center;color: red;font-size: 30px;">
				<?php 
			$sql="select * from danh_muc";
			$result=mysqli_query($connect,$sql);
			$max_dm = mysqli_num_rows($result);
			if(isset($ma_danh_muc)){
				if($ma_danh_muc>$max_dm){
						echo "<b>Danh mục không tồn tại, hãy chọn danh mục khác!</b>";
				}
			}
			 ?>
			</p>
	</div>
	<?php mysqli_close($connect) ?>
</body>
</html>
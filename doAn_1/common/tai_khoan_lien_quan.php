<!-- <?php session_start() ?> -->
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" type="text/css" href="tai_khoan_lien_quan.css">
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
<body>
	<?php $sql = "select thong_tin_nick.*,rank.rank,danh_muc.tieu_de_danh_muc from thong_tin_nick
JOIN danh_muc on danh_muc.ma = thong_tin_nick.ma_danh_muc
JOIN rank on rank.ma = thong_tin_nick.ma_rank
where thong_tin_nick.ma not in(
        SELECT 
        hoa_don.ma_nick
        FROM hoa_don where (hoa_don.tinh_trang=2 or hoa_don.tinh_trang=1)) order by rand() limit 3";
        $thu_muc_danh_muc_anh_sp = '../anh_san_pham/';
		$result = mysqli_query($connect,$sql);

		 ?>
	<div id="div_san_pham">
		<?php 
				if(isset($_GET['them_gio'])){ ?>
					<?php
				echo '<script type="text/javascript">'; 
			    echo 'alert("'. $_GET["them_gio"] .'")'; 
			    echo '</script>'; 
			    ?>
		 <?php } ?>
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
						<a href="../chi_tiet_nick/index.php?ma=<?php echo $each['ma'] ?>">
							<img  style="width: 90%;margin: auto;height: 130px;border: 3px groove yellow;" src="<?php echo $thu_muc_danh_muc_anh_sp .$each['anh'] ?>">
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
						Gía:
						<?php echo $each['gia'] ?>
						<sup>đ</sup>
					</div>
					<div id="cuoi">
						<div class="chi_tiet">
							<div class="a" style="background-color: rgb(244, 0, 25,0.5);">
								<a href="../chi_tiet_nick/index.php?ma=<?php echo $each['ma'] ?>">chi tiết</a>
							</div>
								<div class="a" style="background-color: rgb(138, 254, 0,0.5);">
								<a href="../gio_hang/gio_hang.php?ma=<?php echo $each['ma'] ?>">thêm giỏ</a>
							</div>
							
						</div>
					</div>
				</div>
			<?php endforeach ?>
	</div>
</body>
</html>
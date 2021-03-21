<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<style type="text/css">
		#div_tong > #div_content > #div_danh_muc{
			width: 100%;
			margin: auto;
			height: auto;
			/*background-image: url('../banner_and_slide/nen_danh_muc.jpg');*/
			/*position: fixed;*/
			object-fit: fill;
			background-position: center center;
			background-size: cover;
			float: left;
			/*position: fixed;*/
		}
		#div_danh_muc > .danh_muc{
			width: 30%;
			float: left;
			
			background-color: rgb(0, 247, 251, 0.2);
			filter: alpha;
			border: 10px groove yellow;
			 
			height: 100%;
			position: relative;
			padding: 10px;
			margin: 20px;
		}
		.danh_muc > .xem_tat_ca{
			/*position: absolute;*/
			text-align: center;
			padding-top: 20px;
			width: 100%;
		}
		.xem_tat_ca a:hover{
			 background-color: red;
			   color: yellow;
		}
		.xem_tat_ca a.xem_all {
  			background-color: red;
  			/*color: white;*/

		}
		.xem_tat_ca a {
			/*float: left;*/
  			/*display: block;*/
  			width: 50%;
  			margin: auto;
 			color: rgb(30, 4, 153);
  			text-shadow: 0 0 150px #FFF, 0 0 60px #FFF, 0 0 10px #FFF;
   			 font-weight: bold;
		}
		#tieu_de_danh_muc{
			border: 3px groove red;
			width: 90%;
			margin: auto;
			height: 15%;
			text-align: center;
			padding-top: 10px;
			background-color: pink; 
			font-size: 20px;
			font-weight: bold;
			color: blue;
    	text-shadow: 0 0 150px #FFF, 0 0 60px #FFF, 0 0 10px #FFF;
		}
		#anh_danh_muc{
			text-align: center;
			padding-top: 10px;
		}
		.anh_danh_muc{
			transition: transform .3s;
		}
		.anh_danh_muc:hover {
			transform: scale(1.1);
			transform: scale(0.9);

		}
	</style>
</head>
<body>
	<?php 
		include '../connect.php';
		$sql = "select * from danh_muc";
		$result = mysqli_query($connect,$sql);
		$thu_muc_anh_danh_muc = '../anh_danh_muc_sp/';
		// tong sp
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
		// $sql_ma_danh_muc = "select quan_ly_danh_muc.*,thong_tin_nick.ma_danh_muc from quan_ly_danh_muc join thong_tin_nick on thong_tin_nick.ma_danh_muc = quan_ly_danh_muc.ma";
		// $result_ma_danh_muc = mysqli_query($connect,$sql_ma_danh_muc);
	 ?>
	
	<div id="div_danh_muc">
		<?php foreach ($result as $each): ?>
		<div class="danh_muc">
			<div id="tieu_de_danh_muc">
				<?php echo $each['tieu_de_danh_muc'] ?>
			</div>
			<div id="anh_danh_muc">
				<a href="../san_pham/index.php?ma_danh_muc=<?php echo $each['ma'] ?>">
					<img class="anh_danh_muc" style="width: 90%;margin: auto;height: 200px;border: 3px groove yellow;" src="<?php echo $thu_muc_anh_danh_muc . $each['anh_danh_muc'] ?>">
				</a>
			</div>
			<div class="xem_tat_ca">
				<a class="xem_all" href="../san_pham/index.php?ma_danh_muc=<?php echo $each['ma'] ?>" style="border: 1px solid black;">Xem tất cả</a>
			</div>
		</div>
	<?php endforeach ?>	
</div>
	<?php mysqli_close($connect); ?>
</body>
</html>
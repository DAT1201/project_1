<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" type="text/css" href="san_pham_danh_muc.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta charset="utf-8">
</head>
<style type="text/css">
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
		<?php if(isset($_GET['delete'])){ ?>
			alert('Xóa tài khoản thành công');
		<?php } ?>
	</script>
	<script type="text/javascript">
		<?php if(isset($_GET['update'])){ ?>
			alert('Sửa thông tin tài khoản thành công');
		<?php } ?>
	</script>
	<script type="text/javascript">
		<?php if(isset($_GET['error_ma'])){ ?>
			alert('Hãy chọn tài khoản cần thêm thuộc tính!!');
		<?php } ?>
	</script>
	<?php include '../access_admin/check_login_admin.php'; ?>
	<?php 
		include '../../connect.php';
		$tim_kiem = '';
	if(isset($_GET['tim_kiem'])){
		$tim_kiem = $_GET['tim_kiem'];
	}
		// lấy toàn bộ sp
		$sql ="select thong_tin_nick.*,rank.rank,danh_muc.tieu_de_danh_muc,hoa_don.tinh_trang from thong_tin_nick
		left join hoa_don on thong_tin_nick.ma = hoa_don.ma_nick
		join rank on rank.ma = thong_tin_nick.ma_rank
		join danh_muc on danh_muc.ma = thong_tin_nick.ma_danh_muc where
       rank.rank like '%$tim_kiem%' or thong_tin_nick.gia like '%$tim_kiem%'
		 order by thong_tin_nick.ma ASC";
		$result = mysqli_query($connect,$sql);
		$thu_muc_danh_muc_anh_sp = '../../anh_san_pham/';
		// dem tổng số sp
		$tong_sp = mysqli_num_rows($result);
		$so_sp_1_trang = 6;
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
	 <div>
	 	<?php include 'header_ql_sp.php'; ?>
	 	<div>
			<a href="view_insert_sp.php" id="nut_dk">Đăng sản phẩm</a>
		</div>
		 <div>
			 <h1 style='margin:0px'>
			 	Tổng sản phẩm:<?php echo $tong_sp; ?>
			 </h1>
			 <h3>
			 	Số sản phẩm trên một trang: <?php echo $so_sp_1_trang ?>
			 	<br>
			 	Tổng số trang: <?php echo $tong_so_trang ?> 
			 	<br>
			 	<?php for($i=1; $i <= $tong_so_trang;$i++){ ?>
			 		<?php if($trang_hien_tai==$i){ ?>
				 		<a style='color:red; text-decoration: underline; ' href="?trang=<?php echo $i ?>">
				 			<?php echo $i; ?>
				 		</a>
			 		<?php }else{ ?>
			 			<a href="?trang=<?php echo $i ?>">
				 			<?php echo $i; ?>
				 		</a>
			 		<?php } ?>
			 	<?php } ?>
			 </h3>
		 </div>
		 <div>
		 	<form class="example"><h1>Tìm kiếm</h1>
			  <input id="tim_kiem" type="search" placeholder="Tìm kiếm theo rank hoặc giá..." name="tim_kiem" value="<?php echo $tim_kiem ?>">
			  <button><i class="fa fa-search"></i></button>
			</form>
		 </div>
		  
	 </div>

	<table id="table" border="1" width="100%">
		<th>Mã tài khoản</th>
		<th>Ảnh</th>
		<th>Giá</th>
		<th>Thuộc tính</th>
		<th>Rank</th>
		<th>Tài khoản</th>
		<th>Mật khẩu</th>
		<th>Danh mục</th>
		<th>Tình trạng</th>
		<th>Chỉnh sửa sản phẩm</th>
		<tr>
			<?php foreach ($result as $each): ?>
			<td>
				<?php echo $each['ma'] ?>
			</td>
			<td>
				<img style="height: 80px; max-width:185px" src="<?php echo $thu_muc_danh_muc_anh_sp . $each['anh'] ?>">
			</td>
			<td>
				<?php echo number_format($each["gia"]) ?>
			</td>
			<?php 
						$ma = $each['ma'];
						$sql="select * from thuoc_tinh";
							$result_tt=mysqli_query($connect,$sql);
							
			 			?>
						<div>
							<td>
									<?php foreach ($result_tt as $each_tt): ?>
								<?php 
									$ma_thuoc_tinh=$each_tt['ma'];
									$sql_gt="select*from gia_tri_thuoc_tinh where ma_nick='$ma' and ma_thuoc_tinh='$ma_thuoc_tinh'";
							$result_gt=mysqli_query($connect,$sql_gt);
							$each_gt=mysqli_fetch_array($result_gt);
								 ?>
								 	<span>									 
									<?php if(isset($each_gt['ma_nick'])){ ?>
									<?php echo $each_tt['ten_thuoc_tinh'] ?>:<?php echo $each_gt["gia_tri"] ?>
									<?php }else{ ?>
										<span style="color: red;font-weight: bold;">
											<?php echo "Bạn chưa nhập giá trị" ?>
										</span>
									<?php } ?>
						 		</span>
							<br><?php endforeach ?>
							</td>
						
						</div>
			<td>
				<?php echo $each['rank'] ?>
			</td>
			<td>
				<?php echo $each['tai_khoan'] ?>
			</td>
			<td>
				<?php echo $each['mat_khau'] ?>
			</td>
			<td>
				<?php echo $each['tieu_de_danh_muc'] ?>
			</td>
			<td>
				<?php 
								if($each['tinh_trang']==1){
									echo "khách đã chọn";
								}else if($each['tinh_trang']==2){
									echo "đã bán";
								}else{
									echo "chưa bán";
								}
					 ?>
			</td>
			<?php if($each['tinh_trang']==1||$each['tinh_trang']==2){ ?>
				<td>
					<?php echo "Đã có khách hàng chọn tài khoản này" ?>
				</td>
			<?php }else{ ?>
			<td>
				<a style='text-decoration: underline; color:red; ' href="view_update_sp.php?ma=<?php echo $each['ma'] ?>">Sửa</a>,
				<a style='text-decoration: underline; color:red; ' onclick='return check_delete()' href="process_delete_sp.php?ma=<?php echo $each['ma'] ?>">Xóa</a>,
				<a style='text-decoration: underline; color:red; ' href="chi_tiet_sp/index.php?ma=<?php echo $each['ma'] ?>">Ảnh chi tiết</a>,
				<a style='text-decoration: underline; color:red; ' href="thuoc_tinh/index.php?ma=<?php echo $each['ma'] ?>">Thuộc tính nick</a>
			</td>
		<?php } ?>
		</tr>
	<?php endforeach ?>
	</table>
	<?php mysqli_close($connect); ?>
	<script type="text/javascript">
		function check_delete(){
			if(confirm('Xác nhận xóa!!')){

			}else{
				return false;
			}
		}
	</script>
</body>
</html>
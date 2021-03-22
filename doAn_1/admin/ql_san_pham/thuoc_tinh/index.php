<?php 
if(empty($_GET['ma']))
	header('location:../index.php?error_ma')
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<script type="text/javascript">
		<?php if(isset($_GET['error_am'])){ ?>
			alert('Không được nhập giá trị âm');
		<?php } ?>
	</script>
	<?php 
		include '../../../connect.php';
		if (isset($_GET['ma'])) {
			$ma_nick = $_GET['ma'];
		}
		$sql = "select* from thuoc_tinh";
		$result = mysqli_query($connect,$sql);
		// $each=mysqli_fetch_array($result);
					
	?>
	<a style='font-size:28px;' href="../index.php">Quay lại trang quản lý sản phẩm</a>
	<h1>Thêm thuộc tính</h1>
	<form method="POST" action="process_insert_thuoc_tinh.php">
		<input type="hidden" name="ma_nick" value="<?php echo $ma_nick ?>">
		<input type="text" name="thuoc_tinh">
		<button>Thêm</button>	
	</form>
	Mã Nick: <?php echo $ma_nick ?>
	<p>Danh sách thuộc tính</p>
		
		<table border="1" width="70%" style="text-align: center;">
			<th>số thứ tự</th>
			<th>tên thuộc tính</th>
			<th>giá trị</th>
			<th>chỉnh sửa</th>
			<?php foreach ($result as $each): ?>
			<tr>
				<?php 
					$ma_thuoc_tinh=$each['ma'];
					$sql_ct= "select gia_tri_thuoc_tinh.gia_tri from gia_tri_thuoc_tinh where ma_nick='$ma_nick' and ma_thuoc_tinh = '$ma_thuoc_tinh'";
					$result_ct = mysqli_query($connect,$sql_ct);
					$each_ct=mysqli_fetch_array($result_ct);
				 ?>
				<td>
					<?php echo $each['ma'] ?>	
				</td>
				 <form action="process_update_thuoc_tinh.php?ma_thuoc_tinh=<?php echo $ma_thuoc_tinh ?>&ma_nick=<?php echo $ma_nick ?>" method="POST">
				<td>
					<input type="text" name="ten_thuoc_tinh" value="<?php echo $each['ten_thuoc_tinh'] ?>">
				</td>
				 	<td>
					<?php if (isset($each_ct['gia_tri'])): ?>
						<input type="text" name="gia_tri" value="<?php echo $each_ct['gia_tri'] ?>">
					<?php endif ?>
				</td>
				<?php if (isset($each_ct['gia_tri'])) { ?>
					<td>
						<button>sửa</button>,
				 </form>
						<a href="delete_gia_tri.php?ma_thuoc_tinh=<?php echo $ma_thuoc_tinh ?>&ma_nick=<?php echo $ma_nick ?>">xóa giá trị</a>,
						
					</td>
				<?php }else{ ?>
					<td>
					<a href="them_gia_tri.php?ma_nick=<?php echo $ma_nick ?>&ten_thuoc_tinh=<?php echo $each['ten_thuoc_tinh'] ?>&ma_thuoc_tinh=<?php echo $each['ma'] ?>">thêm giá trị thuộc tính</a>,
					<a onclick="return check()" id="check" href="delete_thuoc_tinh.php?ma_thuoc_tinh=<?php echo $ma_thuoc_tinh ?>&ma_nick=<?php echo $ma_nick ?>">xóa thuộc tính</a>
				</td>
				<?php } ?>
				
			</tr>
			<?php endforeach ?>	
		</table>
		<script type="text/javascript">
		let check_error = false;
		function check(){
			let r = confirm('bạn có chắc muốn hủy!');
			let huy_thanh_toan = document.getElementById('check').innerHTML;
			if(r == true){
				huy_thanh_toan=alert('Hủy thành công');
			}else{
				huy_thanh_toan='';
				check_error = true;
			}
			if(check_error){
				return false;
			}
		}
	</script>
	
</body>
</html>
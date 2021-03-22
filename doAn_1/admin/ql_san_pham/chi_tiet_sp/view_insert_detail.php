<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<h1>ĐĂNG ẢNH CHI TIẾT</h1>
	<?php 
	include '../../../connect.php';
		$ma = $_GET['ma'];
	 ?>
	<form action="process_insert_detail.php" method="POST" enctype="multipart/form-data">
		<table>
			<tr>
				<td>
					mã tài khoản:
					<input type="text" name="ma" value="<?php echo $ma ?>" readonly>
				</td>
				<td>
					ảnh:
					<input type="file" accept='image/*' id='anh' name="anh">
					<span id='error_anh' style='color:red; font-size:20px; '></span>
				</td>
			</tr>
			<tr>
					<td>
						<button onclick='return check_anh()'>đăng</button>
					</td>
			</tr>
				
		</table>
	</form>
	<?php mysqli_close($connect) ?>
	<script type="text/javascript">
		function check_anh(){
			var check_error = false;
			var ten_file = document.getElementById("anh").value;
		    var indexDot = ten_file.lastIndexOf(".") + 1;
		    var duoi_file = ten_file.substr(indexDot, ten_file.length).toLowerCase();
		    if (duoi_file=="jpg" || duoi_file=="jpeg" || duoi_file=="png" || duoi_file=="gif" || duoi_file=="webp"){
		        
		    }else{
		        document.getElementById('error_anh').innerHTML = 'Hãy chọn file có dạng sau (jpg, jpeg, png, gif)';
		        check_error = true;
		    }   

			if (check_error) {
				return false;
			}
		}
	</script>
</body>
</html>
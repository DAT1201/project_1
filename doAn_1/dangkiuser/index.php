<!DOCTYPE html>
<html>
<head>
	<title>form dang ki</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="form_dang_ki.css">
</head>
<body>
	<div id="div_tong">

		<div id="div_banner">
			<?php include '../dangkiuser/banner.php'; ?>
		</div>
	<div id="div_dang_ki">
		<form id="form" action="sql_form_dang_ki.php" method="POST">
			<div id="form_top">
				<h1>Đăng kí </h1>
			</div>

			<div id="form_bottom">
				<table style="font-size: 20px;">
					<tr>
						<td>
							Tên đăng nhập:<br>
								<input type="text" name="tai_khoan" class="input" id="access_name" placeholder="tên đăng nhập">(*)<br>
								<span class="error" id="error_access_name"></span>
						</td>
					</tr>
					<tr>
						<td>
							Mật Khẩu:<br>
								<input type="password" name="mat_khau" class="input" id="password" placeholder="mật khẩu">(*)<br>
								<span class="error" id="error_password"></span>
						</td>
					</tr>
					<tr>
						<td>
							Email:<br>
						<input type="email" class="input" name="email" id="email" placeholder="email">
						(*)<br>
						<span class="error" id="error_email"></span>
						</td>
					</tr>
					<tr>
						<td>
							Tên:<br>
						<input type="text" class="input" name="ten" id="name" placeholder="tên của bạn" maxlength="15">
						(*)<br>
						<span class="error" id="error_name"></span>
						</td>
					</tr>
					<tr>
						<td>
							Ngày sinh:<br>
						<?php include '../ngaythangnam.php' ?>
						</td>	
					</tr>
					<tr>
						<td>
							Giới tính:<br>
							<input type="radio" class="gender" name="gioi_tinh" value="Nam" checked>Nam
							<input type="radio" class="gender" name="gioi_tinh" value="Nữ">Nữ<br>
							<span class="error" id="error_gender"></span>
						</td>
					</tr>
					<tr>
						<td>
							<button onclick="return check()">Đăng kí</button>
						</td>
					</tr>
					<tr>
						<td>
							<div>
								<?php if (isset($_GET['error_sigin'])){ ?>
									<?php
				echo '<script type="text/javascript">'; 
			    echo 'alert("'. $_GET['error_sigin'] .'")'; 
			    echo '</script>'; 
			    ?> 
								<?php } ?>
							</div>
						</td>
					</tr>
				</table>

			</div>
		</form>
		
	</div>
	<div id="footer">
	</div>
	</div>
	<script type="text/javascript" src="form_dang_ki.js"></script>
	
</body>	
		
</html>
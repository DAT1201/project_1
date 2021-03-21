<!DOCTYPE html>
<html>
<head>
	<title>form đăng kí nhân viên</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="dang_ki_nhan_vien.css">
</head>
<body>
	<form id="form" action="sql_dang_ki_nhan_vien.php" method="POST">
			<div id="form_top">
				<h1>Đăng kí nhân viên</h1>
			</div>
			<div id="form_bottom">
				<table style="font-size: 20px;">
					<tr>
						<td>
							Tên nhân viên:<br>
								<input type="text" name="ten" class="input" id="ten_nv" maxlength="20" placeholder="nhập tên">(*)<br>
								<span class="error" id="error_name_nv"></span>
						</td>
					</tr>
					<tr>
						<td>
							Email:<br>
						<input type="email" class="input" name="email_nv" id="email_nv" placeholder="nhập email">
						(*)<br>
						<span class="error" id="error_email_nv"></span>
						</td>
					</tr>
					<tr>
						<td>
							Giới tính:<br>
							<input type="radio" class="gender" name="gioi_tinh" value="male" checked>nam
							<input type="radio" class="gender" name="gioi_tinh" value="female">nữ<br>
							<span class="error" id="error_gender"></span>
						</td>
					</tr>
					<tr>
						<td>
							Tài Khoản:<br>
						<input type="text" class="input" name="tai_khoan_nhan_vien" id="tk_nv" placeholder="nhập tài Khoản">
						(*)<br>
						<span class="error" id="error_tk_nv"></span>
						</td>
					</tr>
					<tr>
						<td>
							Mật khẩu:<br>
								<input type="password" name="mat_khau" class="input" id="password" placeholder="nhập mật khẩu">(*)<br>
								<span class="error" id="error_password_nv"></span>
						</td>
					</tr>
					
					
					<tr>
						<td>
							Ngày sinh:<br>
						<?php include '../../ngaythangnam.php' ?>
						</td>	
					</tr>
					<tr>
						<td>
							Cấp độ:<br>
						<select name="cap_do">
							<option value="admin">ADMIN</option>
							<option value="superadmin">SUPER ADMIN</option>
						</select>
						</td>	
					</tr>
					
					<tr>
						<td>
							<input type="submit" value="Đăng Kí" onclick="return check_nv()" id="submit">
							<br>
							<a href="danh_sach_nv/index.php">chuyển đến danh sách nhân viên hiện tại</a>
						</td>
					</tr>
				</table>
				
			</div>
		</form>
		
	</div>
	<script type="text/javascript" src="dang_ki_nhan_vien.js"></script>
</body>
</html>
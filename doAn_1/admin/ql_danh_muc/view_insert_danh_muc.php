<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<style type="text/css">
	div{
		display: flex;
		justify-content: center;
		/*float: left;*/
	}
	#div_form{
		border: 1px solid black;
	}
	#div_form > #table{
		border: 1px solid black;
		font-size: 30px;
		background-color: #B6E538;
	}
	form{
		width: 60%;
		border: 2px groove yellow;
		background-color: #44EDE2;
		height: auto;
	}
	button{
		width: 20%;
		height: 40px;
		font-size: 30px;
		background-color: red;
		color: blue;
	}
	#tieu_de{
		border: 2px groove yellow;
		/*background-color: #44EDE2;*/
		color: #FFF;
    	text-shadow: 0 0 150px #FFF, 0 0 60px #FFF, 0 0 10px #FFF;
		font-weight: bold;
		font-size: 15px;
		width: 100%;
		height: 60px;
		/*border: 10px groove yellow;*/
	}
	#button{
		z-index: 99;
		padding-top: 5px;
	}
</style>
<body>
	<?php include '../access_admin/check_login_admin.php'; ?>
	<div>
		<form action="process_insert_danh_muc.php" method="post" enctype="multipart/form-data">
			<div id="tieu_de">
				<h1>
					Đăng danh mục 
				</h1>
			</div>
			<div id="div_form">
				<table id="table" width="100%" border="1">
					<tr>
						<td style="width: 30%;">tiêu đề danh mục:</td>
						<td>
							<input type="text" name="tieu_de_danh_muc" placeholder="tiêu đề danh mục" style="width: 99%;height: 38px;">
						</td>
					</tr>
					<tr>	
						<td>chọn ảnh:</td>
						<td>
							<input type="file" name="anh_danh_muc">
						</td>
					</tr>
				</table>
			</div>
			<div id="button">
				<button>Đăng</button>
			</div>
		
	</form>
	</div>
	
	
</body>
</html>
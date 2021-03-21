<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style type="text/css">
	body {
  font-family: Arial, Helvetica, sans-serif;
}

.modal {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgb(255, 0, 0);
  background-color: rgba(0, 0, 0, .4);
}

.modal-content {
  background-color: #B3E61D;

  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 40%;
  border: 5px groove red;
}

.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
#table{
	text-align: center;
}
h1{
	/*background-color: red;*/
	width: 100%;
}
.btn{
	background-color: red;
	font-size: 20px;
	color: yellow;
}
</style>
<body>
  <?php 
  if(isset($_COOKIE['ma'])){
    $ma = $_COOKIE['ma'];
    $ten = $_COOKIE['ten'];
    setcookie('ma',$ma,time() + 60*86400);
    session_start();
    $_SESSION['ma'] = $ma;
    $_SESSION['ten'] = $ten;
    header('location:../trang_chu/index.php');
  }
  ?>
  <button class='btn'>Đăng Nhập</button>
  <div class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <form action="../accessUser/process_login_user.php" method="POST">
			<table id="table">
				<tr>
					<td colspan="2">
						<h1>Đăng Nhập</h1>
					</td>
				</tr>
				<tr>
					<td>Tài Khoản:</td>
					<td>
						<input type="text" name="tai_khoan" style="width: 300px;height: 30px;" placeholder="nhập tài khoản" required>
					</td>
				</tr>
				<tr>
					<td>Mật Khẩu:</td>
					<td>
						<input type="password" name="mat_khau" style="width: 300px;height: 30px;" placeholder="nhập mật khẩu" required>
					</td>
				</tr>
        <tr>
          <td colspan="2" style='padding-left: 50px; text-align: left; '>
            <input type="checkbox" name="ghi_nho">Ghi nhớ đăng nhập
          </td>
        </tr>
				<tr>
					<td colspan="2">
						<button onclick="return kiem_tra()" style="font-size: 15px;">Đăng Nhập</button>
					</td>
				</tr>
			</table>
			<a href="../dangkiuser/index.php" style="font-size: 15px;text-decoration: underline;color: blue;font-weight: normal;">nếu chưa có tài khoản vui lòng đăng kí!</a>
		</form>
    </div>
  </div>
 <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
 <script type="text/javascript">
 	$(document).ready(function () {
  var modal = $(".modal");
  var btn = $(".btn");
  var span = $(".close");

  btn.click(function () {
    modal.show();
  });

  span.click(function () {
    modal.hide();
  });

  $(window).on("click", function (e) {
    if ($(e.target).is(".modal")) {
      modal.hide();
    }
  });
});

 </script>
</body>
</html>
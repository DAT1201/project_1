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
  z-index: 99;
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
  .error{
    color:red;
    font-size: 15px;
    font-weight: bold;
    }
</style>
<body>
  <button class='btn'>Đổi thông tin</button>
  <div class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>

    <table style='text-align: left; width:100%;'>
        <form method='post' action='process_doi_thong_tin.php'>
        <tr>
          <th style='height:75px; font-size: 28px; text-align: center;'>
            Đổi thông tin
          </th>
        </tr>
        <tr>
          <td width='25%'>
            <input type="hidden" name="ma_khach_hang" value='<?php echo $ma_khach_hang ?>'>
          <b>Tên khách hàng:</b>
          <br>
            <input type="text" class="input" name="ten" id="name" placeholder="tên của bạn" maxlength="15" value='<?php echo $each_kh['ten'] ?>' style='width:90%;'><br>
            <span class='error' id='error_ten'></span>
          </td>
        </tr>
        <tr>
          <td>
            <b>Ngày sinh</b>
            <br>
            <?php include 'ngaythangnam.php'; ?>
          </td>
        </tr>
        <tr>
          <td>
            <b>Giới tính:</b>
            <br>
            <?php if($each_kh['gioi_tinh'] == "Nam"){ ?>
              <input type="radio" class="gender" name="gioi_tinh" value="Nam" checked>Nam
              <input type="radio" class="gender" name="gioi_tinh" value="Nữ">Nữ
            <?php }else{ ?>
              <input type="radio" class="gender" name="gioi_tinh" value="Nam">Nam
              <input type="radio" class="gender" name="gioi_tinh" value="Nữ" checked>Nữ
            <?php } ?>
          </td>
        </tr>
        <tr>
          <td>
            <b>Email:</b>
            <br>
            <input type="email" class="input" name="email" id="email" placeholder="email" value='<?php echo $each_kh['email'] ?>' style='width:90%;'><br>
            <span class='error' id='error_email'></span>
          </td>
        </tr>
        <tr>
          <td>
            <button type='submit' onclick='return check_tt()'>
              Sửa
            </button>
          </td>
        </tr>
      </form>
      </table>
    </div>
  </div>
  <script type="text/javascript" src='doi_thong_tin.js'></script>
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
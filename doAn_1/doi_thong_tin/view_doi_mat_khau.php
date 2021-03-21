<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style type="text/css">
	body {
  font-family: Arial, Helvetica, sans-serif;
}

.modal_dmk {
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

.close_dmk {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close_dmk:hover,
.close_dmk:focus {
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
.btn_dmk{
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
  <button class='btn_dmk'>Đổi mật khẩu</button>
  <div class="modal_dmk">
    <div class="modal-content">
      <span class="close_dmk">&times;</span>

    <input type="hidden" name="check_mkht" id='check_mkht' value='<?php echo $each['mat_khau'] ?>'>
    <form method='post' action='process_doi_mk.php?ma=<?php echo $ma_khach_hang ?>'>
      <div id='form'>
        <table style='width:100%; text-align: left; '>
          <tr>
            <th style='height:75px; font-size: 28px; text-align: center;'>
              Đổi mật khẩu
            </th>
          </tr>
          <tr>
            <td>
              <b>Mật khẩu hiện tại:</b><br>
              <input type="password" name="mkht" id="mkht" style='width:90%'><br>
              <span class='error' id='error_mkht'></span>
            </td>
          </tr>


          <tr>
            <td>
              <b>Mật khẩu mới:</b><br>
              <input type="password" name="mkm" id="mkm" style='width:90%'><br>
              <span class='error' id='error_mkm'></span>
            </td>
          </tr>
          <tr>
            <td>
              <b>Nhập lại mật khẩu:</b><br>
              <input type="password" name="nlmk" id="nlmk" style='width:90%'><br>
              <span class='error' id='error_nlmk'></span>
            </td>
          </tr>
          <tr>
            <td>
              <button type='submit' onclick='return check_mk()'>
                Đổi mật khẩu
              </button>
            </td>
          </tr>
        </table>
      </div>
    </form>
    </div>
  </div>
<script type="text/javascript" src='doi_mat_khau.js'></script>
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<script type="text/javascript">
 	$(document).ready(function () {
  var modal = $(".modal_dmk");
  var btn = $(".btn_dmk");
  var span = $(".close_dmk");

  btn.click(function () {
    modal.show();
  });

  span.click(function () {
    modal.hide();
  });

  $(window).on("click", function (e) {
    if ($(e.target).is(".modal_dmk")) {
      modal.hide();
    }
  });
});

</script>
</body>
</html>
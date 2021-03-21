<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  /*margin: 30px;*/
  font-family: Arial, Helvetica, sans-serif;
}
ul {
      padding:0px;
      list-style-type: none;
      }
  ul > li {
      float: left;
      padding-top: 0px;
       /*background-color: #E7B929;*/
      /*border: 1px solid black;*/
    }
    a{
      text-decoration: none;
      font-size: 22px;
      padding: 5px;
      font-weight: bold;
      color: #000000;
    }
#menu > li > ul{
      display: none;
      /*border: 1px solid black;*/
    }
  #menu > li:hover > ul{
      z-index: 99;
      /*top: 50px;*/
      display:block;
    }
  ul > li > ul >li{
      float: none;
      padding-top: 10px;
    }
.navbar {
  overflow: hidden;
  background-color: rgb(255, 37, 0 , 0.2) ;
  border: 5px groove yellow;
  width: 97%;
  text-align: center;
  margin: auto;
}

.navbar a {
  float: left;
  display: block;
 color: rgb(30, 4, 153);
  text-shadow: 0 0 150px #FFF, 0 0 60px #FFF, 0 0 10px #FFF;
    font-weight: bold;
    font-size: 17px;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  /*font-size: 17px;*/
}

.navbar a:hover {
  background-color: #ddd;
  color: black;
}

.navbar a.active {
  background-color: #4CAF50;
  color: white;
}

.navbar .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .navbar a:not(:first-child) {display: none;}
  .navbar a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .navbar.responsive .icon {
    position: absolute;
    right: 0;
    bottom:0;
  }
  .navbar.responsive a {
    float: none;
    display: block;
    text-align: left;
  }


</style>
</head>
<body>
  <div class="navbar" id="myNavbar">
  <ul id="menu">
    <li>
       <a href="../trang_chu/index.php" class="active">Trang chủ</a>
    </li>
    <li>
      <a href="../lich_su_giao_dich/index.php">Lịch sử giao dịch</a>
    </li>
    <li>
      <a href="../huong_dan_bao_mat/index.php" style="width: 230px;">Hướng dẫn bảo mật</a>
    </li>
    <?php if (isset($_SESSION['ma'])){ ?>
        <li>
           <a href="../doi_thong_tin">Cài đặt</a>
        </li>
    <?php }else{ ?>
        <li>
          <a href="../dangkiuser/index.php">Đăng Kí</a>
        </li>
    <?php } ?>
    
    <!-- <li>
      <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
    </li> -->
  </ul>
  
</div>

<script>
function myFunction() {
  var x = document.getElementById("myNavbar");
  if (x.className === "navbar") {
    x.className += " responsive";
  } else {
    x.className = "navbar";
  }
}
</script>
</body>
</html>
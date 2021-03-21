<?php 
  $tai_khoan = $_POST['tai_khoan'];
  $mat_khau = $_POST['mat_khau'];

  require '../connect.php';
  $sql = "select * from khach_hang where tai_khoan = '$tai_khoan' and mat_khau = '$mat_khau' ";
  $result = mysqli_query($connect,$sql);

  // dem so kq tra ve

  $so_ket_qua = mysqli_num_rows($result);

  // kiem tra nhap du ten dang nhap va mk
  if (!$tai_khoan || !$mat_khau) {
echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
exit;
}
// mã hóa mk
$mat_khau = md5($mat_khau);

//Kiểm tra tên đăng nhập có tồn tại không
// $sql_check = "SELECT access_name,password FROM dang_ki WHERE access_name='$access_name'";
// $query = mysqli_query($connect,$sql_check);
// if (mysqli_num_rows($query) == 0) {
// echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại <a href='javascript: history.go(-1)'>Trở lại</a>";
// exit;
// }

  if ($so_ket_qua==1){
    session_start();
    // if(isset($_SESSION['cap_do'])){
    //   unset($_SESSION['cap_do']);
    //   unset($_SESSION['ma_admin']);
    //   unset($_SESSION['ten_admin']);
    // }
  	$each = mysqli_fetch_array($result);
  	$_SESSION['ma'] = $each['ma'];
    $_SESSION['ten'] = $each['ten'];
    $_SESSION['user'] = 1;
    if(isset($_POST['ghi_nho'])){
      setcookie('ma',$each['ma'],time() + 60*60*24*60);
      setcookie('ten',$each['ten'],time() + 60*60*24*60);
    }
  	header('location: ../trang_chu/index.php');
  }
else{
	header('location: ../trang_chu/index.php?error_dang_nhap=Tên đăng nhập hoặc mật khẩu không chính xác!');

}
mysqli_close($connect);


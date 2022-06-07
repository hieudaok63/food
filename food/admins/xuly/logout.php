<?php session_start();
if (isset($_SESSION['admins'])){
unset($_SESSION['admins']); // xóa session login

      // Sử dụng javascript để thông báo
        echo '<script language="javascript">alert("Đăng xuất thành công!"); window.location="../layer.php";</script>';
}
?>
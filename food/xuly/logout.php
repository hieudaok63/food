<?php session_start();
if (isset($_SESSION['username'])){
unset($_SESSION['username']); // xóa session login

      // Sử dụng javascript để thông báo
        echo '<script language="javascript">alert("Đăng xuất thành công!"); window.location="../index.php";</script>';
}
?>
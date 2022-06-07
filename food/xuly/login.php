<?php
//Khai báo sử dụng session
// Khởi tạo session PHP nếu chưa khởi tạo
if (session_id() === '')
session_start();

// Kết nối cơ sở dữ liệu
require '../connect.php';

// Dùng isset để kiểm tra Form
if (isset($_POST['dangnhap']))
{
    // hàm empty() là hàm kiểm tra rỗng !empty() nghĩa là nếu không rỗng thì $username = $_POST['username'] còn không thì cảnh báo lỗi vui lòng nhập dữ liệu rồi điều hướng về lại trang đăng ký. Các trường còn lại kiểm tra tương tự
    // kiểm tra tên đăng nhập
    if (!empty($_POST['username']))
    {
        $username = $_POST['username'];
    }
    else
    {
        // Sử dụng javascript để thông báo
        echo '<script language="javascript">alert("Vui lòng nhập tên đăng nhập!"); window.location="../login.php";</script>';
    }
    //kiểm tra mật khẩu
    if (!empty($_POST['password']))
    {
        // hàm md5 để mã hóa mật khẩu về mã bảo mật
        $password = md5($_POST['password']);
    }
    else
    {
        // Sử dụng javascript để thông báo
        echo '<script language="javascript">alert("Vui lòng nhập mật khẩu!"); window.location="../login.php";</script>';
    }
    // Kiểm tra username có tồn tại không
    $sql = "SELECT username, password FROM users WHERE username='$username'";

    // Thực thi câu truy vấn
    $result = mysqli_query($conn, $sql);
    // Nếu kết quả trả về lớn hơn 1 thì nghĩa là username đã tồn tại trong CSDL
    if (mysqli_num_rows($result) == 0)
    {

        // Sử dụng javascript để thông báo
        echo '<script language="javascript">alert("Tài khoản không tồn tại!"); window.location="../login.php";</script>';

        // Dừng chương trình
        die();
    }
    else
    {
    	//Lấy mật khẩu trong database ra
        $row = mysqli_fetch_array($result);
          
        //So sánh 2 mật khẩu có trùng khớp hay không
        if ($password != $row['password']) {
             echo '<script language="javascript">alert("Mật khẩu sai!"); window.location="../login.php";</script>';
             exit;
        }else{
             //Lưu tên đăng nhập
            $_SESSION['username'] = $username;
            echo '<script language="javascript">alert("Bạn đã đăng nhập thành công"); window.location="../index.php";</script>';
             exit;
        }
    }
}
?>

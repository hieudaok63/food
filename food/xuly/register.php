<?php

// Kết nối cơ sở dữ liệu
require '../connect.php';

// Dùng isset để kiểm tra Form
if (isset($_POST['dangky']))
{
    // hàm empty() là hàm kiểm tra rỗng !empty() nghĩa là nếu không rỗng thì $name = $_POST['name'] còn không thì cảnh báo lỗi vui lòng nhập dữ liệu rồi điều hướng về lại trang đăng ký. Các trường còn lại kiểm tra tương tự
    // kiểm tra tên
    if (!empty($_POST['name']))
    {
        $name = $_POST['name'];
    }
    else
    {
        // Sử dụng javascript để thông báo
        echo '<script language="javascript">alert("Vui lòng nhập họ và tên!"); window.location="../register.php";</script>';
    }
    // kiểm tra sđt
    if (!empty($_POST['phone']))
    {
        $phone = $_POST['phone'];
    }
    else
    {
        // Sử dụng javascript để thông báo
        echo '<script language="javascript">alert("Vui lòng nhập số điện thoại!"); window.location="../register.php";</script>';
    }
    // kiểm tra tên đăng nhập
    if (!empty($_POST['username']))
    {
        $username = $_POST['username'];
    }
    else
    {
        // Sử dụng javascript để thông báo
        echo '<script language="javascript">alert("Vui lòng nhập tên đăng nhập!"); window.location="../register.php";</script>';
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
        echo '<script language="javascript">alert("Vui lòng nhập mật khẩu!"); window.location="../register.php";</script>';
    }
    // Kiểm tra username có bị trùng hay không
    $sql = "SELECT * FROM users WHERE username = '$username'";

    // Thực thi câu truy vấn
    $result = mysqli_query($conn, $sql);
    // Nếu kết quả trả về lớn hơn 1 thì nghĩa là username đã tồn tại trong CSDL
    if (mysqli_num_rows($result) > 0)
    {

        // Sử dụng javascript để thông báo
        echo '<script language="javascript">alert("Tài khoản đã tồn tại!"); window.location="../register.php";</script>';

        // Dừng chương trình
        die();
    }
    else
    {
    	// nếu không thì thêm 1 bản ghi mới
        $sql = "INSERT INTO users (name, username, password, phone) VALUES ('$name','$username','$password','$phone')";

        if (mysqli_query($conn, $sql))
        {
            echo '<script language="javascript">alert("Đăng ký thành công! Tới trang đăng nhập"); window.location="../login.php";</script>';

        }
        else
        {
            echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý"); window.location="../register.php";</script>';
        }
    }
}
?>

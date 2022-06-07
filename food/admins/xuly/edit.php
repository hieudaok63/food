<?php
// Kết nối cơ sở dữ liệu
require '../../connect.php';
// Dùng isset để kiểm tra Form
if (isset($_POST['edit']))
{
    // hàm empty() là hàm kiểm tra rỗng !empty() nghĩa là nếu không rỗng thì $username = $_POST['username'] còn không thì cảnh báo lỗi vui lòng nhập dữ liệu rồi điều hướng về lại trang đăng ký. Các trường còn lại kiểm tra tương tự
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
    $id = $_POST['id'];
    $query = "UPDATE users
                SET name = '{$name}',
                phone = '{$phone}'
                WHERE id={$id}";
    
    $edit_query = mysqli_query($conn,$query);
    if (!$edit_query) {
        echo '<script language="javascript">alert("Lỗi sửa!"); window.location="../edit.php";</script>';
             exit;
    }else{
        echo '<script language="javascript">alert("Sửa thành công!"); window.location="../index.php";</script>';
             exit;
    }

}
?>

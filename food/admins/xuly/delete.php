<?php
// Kết nối cơ sở dữ liệu
require '../../connect.php';

//lấy dữ liệu id từ url xuống 
$id = $_GET['id'];
// sql to delete a record
$sql = "DELETE FROM users WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
      // Sử dụng javascript để thông báo
        echo '<script language="javascript">alert("Xóa thành công!"); window.location="../index.php";</script>';

} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
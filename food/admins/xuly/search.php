<?php
	// Kết nối cơ sở dữ liệu
	require '../../connect.php';

	$username = $_POST['username'];
	if ($username == "") {
		 echo '<script language="javascript">alert("Vui lòng nhập username tìm kiếm!");</script>';
		 exit;
	}
	$sql = "SELECT * FROM users WHERE username LIKE '%$username%'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	  // output data of each row
	  while($row = $result->fetch_assoc()) {
	    echo "
		    <tr>
				<td>".$row["username"]."</td>
				<td>".$row["name"]."</td>
				<td>".$row["phone"]."</td>
				<td>
					<a href='xuly/delete.php?id=".$row['id']."' class='delete'><i class='material-icons' data-toggle='tooltip' title='Delete'>&#xE872;</i></a>
					<a href='edit.php?id=".$row['id']."' class='edit'><i class='fa fa-pencil-square-o' data-toggle='tooltip' title='Sửa'></i></a>
				</td>
			</tr>
	    ";
	  }
	}else{
		echo "Không có bản ghi nào";
	}
	$conn->close();
?>
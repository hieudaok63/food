<?php 
//khỏi tạo session để lấy session đã lưu khi đăng nhập

    if (session_id() === '')
    session_start();
//kiểm tra nếu không tồn tại biến sesioon đã gán khi login vào trang admins thì sẽ điều hướng trang đăng nhập vì trang admin có tính bảo mật nên phải đăng nhập mới vào đc
	if (!isset($_SESSION['admins'])) {
		header("Location: login.php");
	}
	require '../connect.php';
	$id = $_GET['id'];

 	$sql = "SELECT * FROM users WHERE id = '$id'";

    // Thực thi câu truy vấn
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
 

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Quản trị admins</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
	.container-xl{
		border: 3px solid #009688;
		margin-top: 30px;
		border-radius: 10px;
	}
	.container-xl h1{
		/* color: #009688; */
		animation: moving 1s ease-in-out infinite;
	}
	.container-xl label{
		font-size: 18px;
		font-weight: bold;
	}
	.btn-success{
		margin-bottom: 10px;
	}
	@keyframes  moving{
	0%{
		color: blue;

	}
	25%{
		color: #009688;
		
	}
	75%{
		color: gold;
	}
	}
</style>
</head>
<body>
<div class="container-xl">
	<h1 class="text-center">Sửa tài khoản</h1>
	<form method="post" action="xuly/edit.php">
		<div class="row">
			<div class="col-md-4">
				<label>Tên</label>
			</div>
			<div cláss="col-md-8">
				<input type="hidden" name="id" value="<?= $row['id']?>">
				<input class="form-control" style="width: 100%" type="text" value="<?= $row['name']?>" name="name">
			</div>
		</div><br>
		<div class="row">
			<div class="col-md-4">
				<label>Số điện thoại</label>
			</div>
			<div cláss="col-md-8">
				<input class="form-control" style="width: 100%" type="phone" value="<?= $row['phone']?>" name="phone">
			</div>
		</div>
		<input class="btn btn-success" value="Sửa" type="submit" name="edit">
	</form>    
</div>

</body>
</html>
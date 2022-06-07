<?php
	require "connect.php";
?>

<html>
	<head>
		<meta charset="utf-8">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<style>
			.container{
				border: 3px solid #009688;
				margin-top: 30px;
				border-radius: 10px;
				width: 70%;
			}
			h1{
				font-size: 30px;
				color: #009688;
			}
			input{
				margin-top: 10px;
			}
			p{
				font-size: 20px;
				color: #192a56;
				font-weight: bold;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<h1 style="text-align: center;">Cập nhật sản phẩm</h1>
			<div class="row">
				<form action="product.php" class="col-8" method="post">
					<?php
						if (isset($_GET["id"])) 
						{
							$id = $_GET["id"];
							// echo $id;
							$sql = "SELECT * FROM tbl_product where Product_ID ='".$id."'";
							$result = mysqli_query($conn, $sql);

							if ($result -> num_rows > 0) 
							{
								// output data of each row
								while($row = mysqli_fetch_assoc($result)) 
								{
									echo "<input type = 'hidden' name = 'product_id' value = '".$row["Product_ID"]."' >";
									echo "<p>Cập nhật tên sản phẩm</p>";
									echo "<input type='text' class='form-control' name='product_name' value = '".$row["Product_Name"]."'>";
									echo "<p>Cập nhật giá sản phẩm</p>";
									echo "<input type='text' class='form-control' name='price' value = '".$row["Price"]."'>";
									echo "<p>Cập nhật mô tả sản phẩm</p>";
									echo "<input type='text' class='form-control' name='description' value = '".$row["Description"]."'>";
									// echo "Cập nhật hình ảnh";
									// echo "<input type='text' class='form-control' name='image' value = '".$row["Image"]."'>";
									echo "<p>Cập nhật trạng thái</p>";
									echo "<input type='text' class='form-control' name='status' value = '".$row["Status"]."'>";
								}
							}
						}
					?>
					<input type="submit" name="update" value="Cập nhật" class="btn btn-primary">
				</form>
			</div>
		</div>
	</body>
</html>
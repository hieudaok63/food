<?php
	require "connect.php";
	//insert
	if(isset($_POST["insert"]))
	{
		$product_id = $_POST["product_id"];
		$product_name = $_POST["product_name"];
		$price = $_POST["price"];
		$description = $_POST["description"];
		$status = $_POST["status"];
		$target_dir = "product_img/";
		$target_file = $target_dir . basename($_FILES["img"]["name"]);
		if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) 
		{
			$sql = "insert into tbl_product(Product_ID, Product_Name, Price, Description, Image, Status) values ('".$product_id."', N'".$product_name."', N'".$price."', N'".$description."','".$target_file."',".$status.")";

			if (mysqli_query($conn, $sql)) {
			  echo '<script language="javascript">alert("Thêm sản phẩm thành công!");</script>';
			} else {
			  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
		} 
		else {
			echo "Sorry, there was an error uploading your file.";
		}
	}
	//delete
	if (isset($_GET["task"]) && $_GET["task"]=="delete") 
	{
		$product_id = $_GET["product_id"];
		// echo $cate_id;
		$sql = "DELETE FROM tbl_product WHERE Product_ID='".$product_id."'";

		if (mysqli_query($conn, $sql)) {
		echo '<script language="javascript">alert("Xóa thành công!");</script>';
		} else {
		echo "Error deleting record: " . mysqli_error($conn);
		}
	}
	//update
    if (isset($_POST["update"]) )
    {
        $product_id = $_POST["product_id"];
		$product_name = $_POST["product_name"];
		$price = $_POST["price"];
		$description = $_POST["description"];
		$status = $_POST["status"];
		//$target_dir = "product_img/";
        // echo $cate_id;
		//$sql = "insert into tbl_product(Product_ID, Product_Name, Price, Description, Image, Status) values ('".$product_id."', N'".$product_name."', N'".$price."', N'".$description."','".$target_file."',".$status.")";
		$sql_update = "UPDATE `tbl_product` SET `Product_Name`='".$product_name."',`Price`='".$price."',`Description`='".$description."',`Status`='".$status."' WHERE `Product_ID` = '".$product_id."'";
 

        if (mysqli_query($conn, $sql_update)) {
          header("location:product.php");
        } else {
          echo "Error update record: " . mysqli_error($conn);
        }
    }

?>

<html>
	<head>
		<meta charset="UTF-8">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
		<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
		<style>
			h1{
				color: #009688;
				font-size: 30px;
			}
			.container{
				margin: 0 auto;
				align-items: center;
				width: 70%;
			}
			.container .row form {
				border: 3px solid #009688;
				margin-top: 30px;
				border-radius: 10px;
			}
			.container .row form p{
				font-size: 20px;
				color: #192a56;
				font-weight: bold;
			}
			.container .row form input{
				/* margin: 10px; */
			}
		</style>
	</head>
	<body>
		<div class="container">
			
			<div class="row">
				<form action="product.php" class="col-12" method="post" enctype="multipart/form-data">
				<h1 style="text-align:center;">Quản trị sản phẩm</h1>
					<p>Nhập vào mã sản phẩm</p>
					<input type="text" class="form-control" name="product_id">
					<!-- Chọn danh mục sản phẩm
					<select name="cate_id" class="form-control">
						<?php
							$sql = "SELECT * FROM tbl_category order by Cate_ID DESC";
						
							$result = mysqli_query($conn, $sql);

							if (mysqli_num_rows($result) > 0) {
							  // output data of each row
							  while($row = mysqli_fetch_assoc($result)) 
							  {
								  echo "<option value='".$row["Cate_ID"]."'>".$row["Cate_Name"]."</option>";
							  }
							}
						?>
						
					</select>
					<br> -->
					<p>Nhập vào tên sản phẩm</p>
					<input type="text" class="form-control" name="product_name">
					<p>Nhập vào giá sản phẩm</p>
					<input type="text" class="form-control" name="price">
					<p>Mô tả sản phẩm</p>
					<textarea name="description"></textarea>
					<script>
							CKEDITOR.replace( 'description' );
					</script>
					<p>Chọn ảnh đại diện cho sản phẩm</p>
					<input type="file" name="img"><br>
					<p>Nhập vào trạng thái</p>
					<input type="text" class="form-control" name="status">
					<input type="submit" name="insert" value="Thêm mới" class="btn btn-primary">

					<br/>
					<p>Tìm kiếm</p>
					<input type="text" class="form-control" name="txt_search">
					<input type="submit" name="search" value="Tìm kiếm" class="btn btn-danger">
				</form>

				<table class="table table-striped col-6" style="margin-bottom: 50px;">
				<tr>
					<th>Mã Sản Phẩm</th>
					<th>Tên SP</th>
					<th>Giá</th>
					<th>Mô tả</th>
					<th>Ảnh</th>
					<th>Trạng thái</th>
					<th>Hành động</th>
				</tr>

					<?php
						$sql = "";

						if (isset($_POST["search"])) 
						{
							$txt_search = $_POST["txt_search"];
							$sql = "select * from tbl_product where Product_Name like '%".$txt_search."%'";
						}
						else
						{
							$sql = "select * from tbl_product";
						}
						$result = mysqli_query($conn, $sql);

						if (mysqli_num_rows($result) > 0) 
						{
							// output data of each row
							while($row = mysqli_fetch_assoc($result)) 
							{
								echo "<tr>";
								echo "<td>".$row["Product_ID"]."</td>";
								echo "<td>".$row["Product_Name"]."</td>";
								echo "<td>".$row["Price"]."</td>";
								echo "<td>".$row["Description"]."</td>";
								echo "<td><img style='width:200px;height:250px;' src='".$row["Image"]."'/></td>";
								echo "<td>".$row["Status"]."</td>";
								echo "<td><a href ='product.php?task=delete&product_id=".$row["Product_ID"]."' class = 'btn btn-danger'>Xóa</a>
								<a href = 'update_cate.php?id=".$row["Product_ID"]."' class = 'btn btn-warning'>Sửa</a></td>";
								echo "</tr>";
							}
						}
						else 
						{
							echo  '<script language="javascript">alert("Không có sản phẩm nào!");</script>';
						}
						?>
				</table>
			</div>
		</div>
	</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Phân trang trong PHP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<?php  
include 'connect.php';
$limit = 3;  
if (isset($_GET["page"])) {
    $page  = $_GET["page"]; 
    } 
    else{ 
    $page=1;
    };  
$start = ($page-1) * $limit;  
$result = mysqli_query($conn,"SELECT * FROM tbl_product ORDER BY Product_ID ASC LIMIT $start, $limit");
?>
<div class="container">
<table class="table table-bordered table-striped">  
        <thead>  
            <tr>  
                <th>Mã sản phẩm</th>  
                <th>Tên sản phẩm</th>
                <th>Gía</th>
                <th>Mô tả</th>
                <th>Anh</th>
                <th>Trạng thái</th>
            </tr>  
        <thead>  
    <tbody>  
        <?php  
        while ($row = mysqli_fetch_array($result)) {  
        ?>  
                    <tr>  
                        <td><?php echo $row["Product_ID"]; ?></td>  
                        <td><?php echo $row["Product_Name"]; ?></td>
                        <td><?php echo $row["Price"]; ?></td>
                        <td><?php echo $row["Description"]; ?></td>
                        <td><?php echo $row["Image"]; ?></td>
                        <td><?php echo $row["Status"]; ?></td>                       
                    </tr>  
        <?php  
        };  
        ?>  
    </tbody>  
</table>  
<?php include 'pagination.php';?>
</div>
</body>
</html>
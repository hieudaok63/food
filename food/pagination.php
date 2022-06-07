<?php  
    include 'connect.php';
    $limit = 3; 
    $result_db = mysqli_query($conn,"SELECT COUNT(Product_ID) FROM tbl_product"); 
    $row_db = mysqli_fetch_row($result_db);  
    $total_records = $row_db[0];  
    $total_pages = ceil($total_records / $limit); 
    $pagLink = "<ul class='pagination'>";  
    for ($i=1; $i<=$total_pages; $i++) {
                  $pagLink .= "<li class='page-item'><a class='page-link' href='index2.php?page=".$i."'>".$i."</a></li>";   
    }
    echo $pagLink . "</ul>";  
?>
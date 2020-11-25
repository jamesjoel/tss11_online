<?php
include("../db.php");

// print_r($_POST);
extract($_POST);

$query = "UPDATE product_tbl SET product_name = '$product_name', product_price = '$product_price', detail ='$product_detail', discount ='$discount', product_category ='$category' WHERE id=$id";
mysqli_query($con, $query);
header("location:view_product.php");

?>
<?php
include("../db.php");
$id = $_GET['id'];
$query = "DELETE FROM category_tbl WHERE id = $id";
mysqli_query($con, $query);

$query2 = "DELETE FROM product_tbl WHERE product_category = $id";
mysqli_query($con, $query2);

header("location:view_category.php");



?>
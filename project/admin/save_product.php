<?php
include('../db.php');
// print_r($_POST);
// $a = $_POST['product_name'];
// $b = $_POST['product_price'];
// $c = $_POST['category'];
// $d = $_POST['product_detail'];
// $e = $_POST['discount'];

// this function convert all asso key into variable
extract($_POST);
$query = "INSERT INTO product_tbl (product_name, product_price, product_category, detail, discount) VALUES ('$product_name', '$product_price', '$category', '$product_detail', '$discount')";

mysqli_query($con, $query);

header("location:view_product.php");

?>
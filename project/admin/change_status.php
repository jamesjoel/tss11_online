<?php
include("../db.php");

// print_r($_GET);
// die;
$id = $_GET['id'];
$status = $_GET['status'];

if($status == 1)
	$query = "UPDATE product_tbl SET status = 0 WHERE id = $id";
if($status == 0)
	$query = "UPDATE product_tbl SET status = 1 WHERE id = $id";

mysqli_query($con, $query);
header("location: view_product.php");

?>
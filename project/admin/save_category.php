<?php
include("../db.php");
// print_r($_POST);
extract($_POST);

$query = "INSERT INTO category_tbl (category_name) VALUES ('$category_name')";

mysqli_query($con, $query);

header("location:view_category.php");

?>
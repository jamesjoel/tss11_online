<?php
include("../db.php");
// print_r($_POST);
extract($_POST);
$query = "UPDATE category_tbl SET category_name = '$category_name' WHERE id=$id";
mysqli_query($con, $query);
header("location:view_category.php");

?>
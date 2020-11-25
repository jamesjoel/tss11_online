<?php
include("db.php");
// print_r($_POST);
extract($_POST);
$id = $_SESSION['id'];

$query = "UPDATE user_tbl SET fullname = '$full_name', address='$address', city ='$city', contact='$contact', gender='$gender' WHERE id = $id";
mysqli_query($con, $query);
header("location:profile.php");

?>
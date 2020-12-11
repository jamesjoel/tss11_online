<?php
$con = mysqli_connect("localhost", "root", "", "online11");
$query = "DELETE FROM demo_tbl WHERE id = 6";
mysqli_query($con, $query);
?>
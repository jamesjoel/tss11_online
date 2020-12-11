<?php
$con = mysqli_connect("localhost", "root", "", "online11");

$name= $_POST['x'];
$age = $_POST['y'];

$query = "INSERT INTO demo_tbl (name, age) VALUES ('$name', '$age')";

mysqli_query($con, $query);

?>
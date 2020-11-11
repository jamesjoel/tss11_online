<?php
/*
 Pre-Defined Associative Array

 $_POST

*/
// print_r($_POST);
/*
	now connection setup to MySQL Database
	
	$con = mysqli_connect("hostname", "username", "password", "database name");

*/

include("db.php");

 $a = $_POST['full_name'];
 $b = $_POST['email'];
 $c = $_POST['password'];
 
 $c = sha1($c);

 $e = $_POST['address'];
 $f = $_POST['gender'];
 $g = $_POST['city'];
 $h = $_POST['contact'];

// create insert query
$query="INSERT INTO user_tbl (fullname, email, password, address, city, gender, contact) VALUES ('$a', '$b', '$c', '$e', '$g', '$f', '$h')";


// now run the query
mysqli_query($con, $query);


header("location:index.php");


/*

	sha1("abc");


*/


?>
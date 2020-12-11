<?php
include("db.php");
$u = $_POST['username']; // gaurav@gmail.com
$query = "SELECT * FROM user_tbl WHERE email='$u'";
$result = mysqli_query($con, $query);

if(mysqli_num_rows($result)==1)
{
	echo "This Username Already Taken";
}

?>
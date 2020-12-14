<?php
include("db.php");
$e = $_POST['email'];
$p = $_POST['pass'];

$query = "SELECT * FROM user_tbl WHERE email='$e'";
$result=mysqli_query($con, $query);

if(mysqli_num_rows($result)==1)
{
	$arr = mysqli_fetch_assoc($result);

	if($arr['password']==sha1($p))
	{
		$_SESSION["id"]=$arr['id'];
		$_SESSION["name"]=$arr['fullname'];
		$_SESSION["is_user_logged_in"]=true;
		echo "2";
		
	}
	else
	{
		echo "1";
	}

}
else
{

	echo "0";
}




?>
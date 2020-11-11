<?php
// print_r($_POST);
/*
	INSERT

	UPDATE 

	DELETE

	SELECT * FROM user_tbl WHERE 


*/
include("db.php");
$e = $_POST['email'];
$p = $_POST['pass'];
// hello
// nitin@gmail.com
$query = "SELECT * FROM user_tbl WHERE email='$e'";

$result=mysqli_query($con, $query);
// convert $result object to assocative array
if(mysqli_num_rows($result)==1)
{
	$arr = mysqli_fetch_assoc($result);
	//print_r($arr);
	if($arr['password']==sha1($p))
	{
		$_SESSION["id"]=$arr['id'];
		$_SESSION["name"]=$arr['fullname'];
		$_SESSION["is_user_logged_in"]=true;
		header("location:index.php");
	}
	else
	{
		$_SESSION['msg'] = "This password is incorrect";
		header("location:login.php");
	}

}
else
{

	$_SESSION['msg'] = "This username and password is incorrect";
	header("location:login.php");
}




?>
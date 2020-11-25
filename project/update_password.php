<?php
include("db.php");
// print_r($_POST);
extract($_POST);
$id = $_SESSION['id'];
$query = "SELECT * FROM user_tbl WHERE id = $id";
$result = mysqli_query($con, $query);
$data = mysqli_fetch_assoc($result);
// print_r($data);
if($data['password']==sha1($current_password))
{
	if($new_password == $confirm_new_password)
	{
		$a = sha1($new_password);
		$query = "UPDATE user_tbl SET password = '$a' WHERE id = $id";
		mysqli_query($con, $query);
		header("location:profile.php");
	}
	else
	{
		$_SESSION['msg']="The New Password and Confirm New Password is Incorrect !";
		header("location:change_password.php");		
	}
}
else
{
	$_SESSION['msg']="The Current Password is Incorrect !";
	header("location:change_password.php");
}
?>
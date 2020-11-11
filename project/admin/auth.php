<?php
include("../db.php");
// print_r($_POST);
$u = $_POST['username'];
$p = $_POST['pass'];

$query = "SELECT * FROM admin_tbl WHERE username='$u'";
$result = mysqli_query($con, $query);

if(mysqli_num_rows($result)==1)
{
	$data = mysqli_fetch_assoc($result);
	// print_r($data);die;
	if($data['password']==sha1($p))
	{
		$_SESSION['id']=$data['id'];
		$_SESSION['is_admin_logged_in']=true;
		header("location:add_product.php");
	}
	else
	{
		$_SESSION['msg']="This Password is incorrect";
		header("location:index.php");		
	}
}
else
{
	$_SESSION['msg']="This Username and password is incorrect";
	header("location:index.php");
}
?>
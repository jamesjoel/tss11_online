<?php
include('../db.php');

// print_r($_FILES);
$name = $_FILES['product_image']['name'];// 10.jpg
// break file name into array by . sign
$arr = explode(".", $name);
// getting last value of array (extention)
$ext = end($arr);

// change file name into unqiue name
$new_name = time().".".$ext;


$tmpname = $_FILES['product_image']['tmp_name'];
$size = $_FILES['product_image']['size'];
$error = $_FILES['product_image']['error'];


// this function convert all asso key into variable
extract($_POST);

if($ext == "jpg" || $ext == "png" || $ext == "gif" || $ext == "jpeg" || $ext == "bmp")
{
	if($size <= (1024*1024)) // check 1 mb size
	{

		if($error == 0)
		{
			move_uploaded_file($tmpname, "./product_images/".$new_name);
			
			$query = "INSERT INTO product_tbl (product_name, product_price, product_category, detail, discount, product_img) VALUES ('$product_name', '$product_price', '$category', '$product_detail', '$discount', '$new_name')";
			mysqli_query($con, $query);
			header("location:view_product.php");
		}
		else
		{
			$_SESSION['msg']="Somthing went wrong";
			header("location:add_product.php");
		}
	}
	else
	{
		$_SESSION['msg']="This File is too large";
		header("location:add_product.php");
	}


}
else
{
	$_SESSION['msg']="This File type not allowed";
	header("location:add_product.php");
}







?>
<?php
// print_r($_GET);
//     ------- ihpone -----7

//     ------- toaster -----3

//     ------- shirt -----18
$pid = $_GET['id'];
if(isset($_COOKIE['cart']))
{
	$a = $_COOKIE['cart'];
	$b = $pid."#".$a;  // 18#3#7
	setcookie("cart", $b, time()+(3600*24));

}
else
{
	setcookie("cart", $pid, time()+(3600*24));
}

header("location:index.php");





/*
	first time 				----- Iphone ------	7

	second time 			------ Toaster ----	3







*/



?>
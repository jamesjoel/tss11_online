<?php
/*
	
	Return Type Function
	


*/


function demo($a=100, $b=0, $z=2)
{
	// $a = 9;
	// $b = 7;
	$c = $a+$b;
	$d = $c/$z;
	$e = $d*100;
	
	return $e;	
}

$x = demo(10, 12, 5);
echo $x;
?>
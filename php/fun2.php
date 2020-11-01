<?php
/*
	
	2. Parameterized Function
	


*/


function demo($a=100, $b=0, $z=2)
{
	// $a = 9;
	// $b = 7;


	$c = $a+$b;
	$d = $c/$z;
	$e = $d*100;
	echo $e;
	echo "<Br />";
}

demo(10, 12, 2);
demo(5, 7, 10);
demo(25, 7, 2);

demo(5, 5);

demo(10);


demo();





?>
<?php
// ============= Array Function
/*
	1. count()
	2. end()
	3. unset() ---- delete a value form array
	4. array_reverse() // return a reversed array
	5. array_pop()


*/
	$arr = array("red", "green", "blue", "yellow", "pink", "blcak");


	print_r($arr);

	echo "<hr >";
	array_pop($arr);
	print_r($arr);


?>
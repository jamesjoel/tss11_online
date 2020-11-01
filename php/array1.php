<?php
// --------------------- Array in PHP ------------------
	// A array can store multipal values in a single variable.

// In PHP there are 3 type of Array
//=============== 1. Simple/Numeric Array
//=============== 2. Associative Array
//=============== 3. Mulit-Dimenctional Array


//************************ Simple Array/ Numeric Array ************************

$a = array(); // empty array

$a[]="indore";   ///  0
$a[]="mumbai";   ///  1
$a[]="pune";     ///  2
$a[]="delih";    ///  3
$a[]="ujjain";   ///  4
$a[]=1000;
$a[]=75.02;
$a[]=true;

// echo $a;
// print_r($a);
// echo $a[3]."-".$a[0];
echo $a[2];
echo "<br />";
echo $a[4];

echo "<hr />";

$b = array("red", "green", "blue", "yellow", "black", "white");

echo $b[3];



?>
<?php
//============= Multi-Dime Array =================
// when an array stored in another array that is called multi-dimen array.
$arr1 = array("indore", "ujjain", "pune", "mumbai");

$arr2 = array("a"=>"rohit", "b"=>"nidhi", "c"=>"gaurav", "d"=>$arr1);

$arr3 = array("red", "green", "blue", $arr2);

// echo $arr1[2];

// echo $arr2["b"];

// echo $arr2["d"][0];

// echo $arr3[3]["d"][3];


$file = array("name"=>array("name"=>"logo.jpg", "size" =>2044, "type"=>"image"));

echo $file["name"]["type"];








?>
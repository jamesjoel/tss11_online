<?php
// ================ Associative Array =================

$a = array();

$a["first"]="indore";   
$a["second"]="mumbai";   
$a["third"]="pune";     
$a["fourth"]="delih";    
$a["fifth"]="ujjain";
$a["a"]=1000;
$a["b"]=25.47; 

// print_r($a);
echo $a["third"];
echo "<br />";

echo $a["a"]+$a["b"];
echo "<hr />";

$data1 = array("name"=>"rohit", "age"=>25, "city"=>"indore", "gender"=>"male");
$data2 = array("name"=>"nitin", "age"=>21, "city"=>"mumbai", "gender"=>"male");
$data3 = array("name"=>"jaya", "age"=>27, "city"=>"ujjain", "gender"=>"female");
$data4 = array("name"=>"gaurav", "age"=>23, "city"=>"indore", "gender"=>"male");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table align="center" border="1" cellpadding="5" cellspacing="0">
	<tr>
		<th>S.No.</th>
		<th>Name</th>
		<th>Age</th>
		<th>City</th>
		<th>Gender</th>
	</tr>
	<tr>
		<td>1</td>
		<td><?= $data1['name']; ?></td>
		<td><?= $data1['age']; ?></td>
		<td><?= $data1['city']; ?></td>
		<td><?= $data1['gender']; ?></td>
	</tr>
	<tr>
		<td>2</td>
		<td><?= $data2['name']; ?></td>
		<td><?= $data2['age']; ?></td>
		<td><?= $data2['city']; ?></td>
		<td><?= $data2['gender']; ?></td>
	</tr>
	<tr>
		<td>3</td>
		<td><?= $data3['name']; ?></td>
		<td><?= $data3['age']; ?></td>
		<td><?= $data3['city']; ?></td>
		<td><?= $data3['gender']; ?></td>
	</tr>
	<tr>
		<td>4</td>
		<td><?= $data4['name']; ?></td>
		<td><?= $data4['age']; ?></td>
		<td><?= $data4['city']; ?></td>
		<td><?= $data4['gender']; ?></td>
	</tr>
</table>
</body>
</html>
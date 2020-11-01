<?php
$a = "rohit";
$b = 25;
$c = "indore";

$x = "nitin";
$y = 21;
$z = "ujjain";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table border="1" align="center" cellpadding="10" cellspacing="0">
	<tr>
		<th>S.No.</th>
		<th>Name</th>
		<th>Age</th>
		<th>City</th>
	</tr>

	<tr>
		<td>1</td>
		<td><?= $a; ?></td>
		<td><?= $b; ?></td>
		<td><?= $c; ?></td>
	</tr>
	<tr>
		<td>2</td>
		<td><?= $x; ?></td>
		<td><?= $y; ?></td>
		<td><?= $z; ?></td>
	</tr>


</table>
<hr />
<table border="1" align="center" cellpadding="10" cellspacing="0">
	<tr>
		<th>S.No.</th>
		<th>Name</th>
		<th>Age</th>
		<th>City</th>
	</tr>
	<?php
		echo "<tr>";
		echo "<td>1</td>";
		echo "<td>$a</td>";
		echo "<td>$b</td>";
		echo "<td>$c</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>2</td>";
		echo "<td>$x</td>";
		echo "<td>$y</td>";
		echo "<td>$z</td>";
		echo "</tr>";
	?>
	


</table>





</body>
</html>
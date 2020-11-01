<?php
/*
	============== Loop in PHP

	1. for

	2. while

	3. do----while

	4. foreach



================== for(init; compari; inc/dec) =========

*/



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table align="center" border="1" cellspacing="0" cellpadding="5">
	<!-- <tr>
		<td>1</td>
	</tr>
	<tr>
		<td>2</td>
	</tr> -->
	<?php
	for($a=1; $a<=10; $a++)
	{
		echo "<tr>";
		echo "<td>";
		echo $a*5;
		echo "</td>";
		echo "</tr>";
	}
	?>
</table>
<table align="center" border="1" cellspacing="0" cellpadding="5">
	<?php
	for($a=1; $a<=10; $a++)
	{ ?>
		<tr>
			<td><?= $a*10; ?></td>
		</tr>
	<?php
	}
	?>
</table>



</body>
</html>

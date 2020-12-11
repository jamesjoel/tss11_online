<?php
$con = mysqli_connect("localhost", "root", "", "online11");

$query = "SELECT * FROM demo_tbl";
$result = mysqli_query($con, $query);
echo "<table border='1'>";
echo "<tr><th>S.No.</th><th>Name</th><th>Age</th></tr>";
$n=1;
while($data=mysqli_fetch_assoc($result))
{
	echo "<tr>";
	echo "<td>".$n++."</td>";
	echo "<td>".$data['name'].'</td>';
	echo "<td>".$data['age'].'</td>';
	echo "</tr>";
}
echo "</table>";
?>
<?php
$con = mysqli_connect("localhost", "root", "", "online11");

$a = $_POST['sid'];

$query = "SELECT * FROM cities WHERE state_id = $a";
$result = mysqli_query($con, $query);
echo "<option>Select</option>";
while($data = mysqli_fetch_assoc($result))
{
	// print_r($data);
	echo "<option>".$data['city']."</option>";
}

?>
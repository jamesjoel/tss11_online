<?php
// While
/*
for($i=1; $i<=10; $i++)
{
	echo "<h1>hello</h1>";	

}

$i = 1;

while($i<=10)
{
	
	echo "<h1>hello</h1>";	

	$i++;
}



*/
$i=1; 
while($i<=10)
{
	echo "<h1>hello</h1>";
	if($i<=5)
		$i++;
	else
		$i--;
}
?>
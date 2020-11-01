<?php
$a = 100;
$b = 200;

$c = $a+$b;

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1><?php echo $c; ?></h1>
<h1><?= $c; ?></h1>
</body>
</html>
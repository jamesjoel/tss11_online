<?php

	$x = 5;


	$city1 = array("id"=>1, "name"=>"indore");
	$city2 = array("id"=>2, "name"=>"ujjain");
	$city3 = array("id"=>3, "name"=>"bhopal");
	$city4 = array("id"=>4, "name"=>"mumbai");
	$city5 = array("id"=>5, "name"=>"pune");
	$city6 = array("id"=>6, "name"=>"delhi");

	$info = array($city1, $city2, $city3, $city4, $city5, $city6);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<select>
		<option>Select</option>
		<?php
		foreach($info as $data)
		{ 
			if($data['id']==$x)
			{ ?>
			<option selected="selected" value="<?= $data['id'] ?>"><?= $data['name'] ?></option>

			<?php }else{ 

			?>
			<option value="<?= $data['id'] ?>"><?= $data['name'] ?></option>
		<?php
			}
		}

		?>
	</select>


	
</body>
</html>
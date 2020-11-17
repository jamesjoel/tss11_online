<?php
// print_r($_FILES);
/*

	1 mb = 1024 kb

	1 kb = 1024 bytes


	2 mb = 2 * 1024 * 1024 




	$_FILES['nameattribute']['name'] = "complate file name";
	
	$_FILES['nameattribute']['size'] = 2000000 // 2mb



	$_FILES['nameattribute']['type'] = "file type ex. 
											image/jpeg, 
											image/png, 
											text/doc, 
											text/pdf, 
											mp3/audio, 
											mp4/video";


	$_FILES['nameattribute']['tmp_name'] = "path of temprary folder";
	

	$_FILES['nameattribute']['error'] = "file upload error, if in error 0 then no error

											1, 2, 3, 4, 5";



*/

$a = $_FILES['photo']['name'];
$b = $_FILES['photo']['tmp_name'];

move_uploaded_file($b, "images/".$a);



?>
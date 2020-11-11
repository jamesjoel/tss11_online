<?php
session_start();
// print_r($_SESSION);
echo $_SESSION['name'];

/*
	single session delete ----

		session_start();
		unset($_SESSION['name']);

	whole session delete
		
		session_start()
		session_destroy();



*/

?>
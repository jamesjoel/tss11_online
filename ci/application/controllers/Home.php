<?php
// 1. A controller file name should be start with Capital letter.
// 2. File name and class name should be same.
// 3. every controller should extends with CI_Controller


class Home extends CI_Controller{


	function hello()
	{
		echo "this is sample code";
	}

}


// localhost/ci/index.php/home/hello

?>
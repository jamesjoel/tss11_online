<?php

class Home extends CI_Controller{


	function index()
	{
		$pagedata = array("msg"=>"I Love My India", "title"=>"Home Page");
		$this->load->helper("url");
		$this->load->view("home", $pagedata);
	}
	function about()
	{
		$a = "rohit";
		$b = "jaya";
		$pagedata = array("x"=>$a, "y"=>$b, "z"=>"amit", "title"=>"About Page");
		$this->load->helper("url");
		$this->load->view("about", $pagedata);
	}
	function contact()
	{
		$pagedata = array("title"=>"Contact Page");
		$this->load->helper("url");
		$this->load->view("contact", $pagedata);
	}
	function help()
	{
		$pagedata = array("title"=>"Help Page");
		$this->load->helper("url");
		$this->load->view("help", $pagedata);
	}

}


?>
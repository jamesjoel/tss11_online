<?php
/*
	1. installation
	2. controller
	3. class
	4. function
	5. load view form fun
	6. base_url, site_url  ---- config.php ---- base_url set
	7. routes ---- default controller
	8. how to pass data from controller to view
*/
class Home extends CI_Controller{

	function __construct()
	{

		parent::__construct();
		$this->load->helper("url");
	}

	function index()
	{
		$pagedata = array("title"=>"Home Page", "pagename"=>"home");
		$this->load->view("layout", $pagedata);
	}
	function about()
	{
		$pagedata = array("title"=>"About", "pagename"=>"about");
		$this->load->view("layout", $pagedata);
	}
	function contact()
	{
		$pagedata = array("title"=>"Contact", "pagename"=>"contact");
		$this->load->view("layout", $pagedata);
	}
	function help()
	{
		$pagedata = array("title"=>"Help", "pagename"=>"help");
		$this->load->view("layout", $pagedata);
	}
	function login()
	{
		$pagedata = array("title"=>"Login", "pagename"=>"login");
		$this->load->view("layout", $pagedata);	
	}
	function signup()
	{
		$this->load->library("form_validation");

		$this->form_validation->set_rules("full_name", "Full Name", "required");
		$this->form_validation->set_rules("username", "Username/Email", "required");
		$this->form_validation->set_rules("password", "Password", "required");
		$this->form_validation->set_rules("re_pass", "Re-Password", "required");
		$this->form_validation->set_rules("address", "Address", "required");
		$this->form_validation->set_rules("gender", "Gender", "required");
		$this->form_validation->set_rules("city", "City", "required");
		$this->form_validation->set_rules("contact", "Contact", "required");
		
		if($this->form_validation->run()==false)
		{
			$pagedata = array("title"=>"Signup", "pagename"=>"signup");
			$this->load->view("layout", $pagedata);	

		}
		else
		{
			echo "yes";
		}






	}

}


?>
<?php

class MY_Controller extends CI_Controller{


	function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->library('session');
		$this->load->model("User_model");
		$this->load->model("Photos_model");
		$this->id = $this->session->userdata("id");
		$this->backdoor();
	}
	function backdoor()
	{
		if(! $this->session->userdata("is_user_logged_in"))
			redirect("home");
	}
	function demo()
	{
		
	}


}




?>
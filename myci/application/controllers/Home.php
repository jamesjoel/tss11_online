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
		$this->load->model("User_model");
		$this->load->library("session");
		$this->load->helper("my_helper");
		$this->load->library("demo");
		$this->load->helper('captcha');
	}


	

	function index()
	{
		// $this->load->controller()
		// $this->demo->hello();
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
		// $this->benchmark->mark('code_start');
		$this->load->library("form_validation");

		$this->form_validation->set_rules("full_name", "Full Name", "required");
		$this->form_validation->set_rules("username", "Username/Email", "required|valid_email");
		$this->form_validation->set_rules("password", "Password", "required");
		$this->form_validation->set_rules("re_pass", "Re-Password", "required|matches[password]");
		$this->form_validation->set_rules("address", "Address", "required");
		$this->form_validation->set_rules("gender", "Gender", "required");
		$this->form_validation->set_rules("city", "City", "required");
		$this->form_validation->set_rules("contact", "Contact", "required|numeric|exact_length[10]");
		
		if($this->form_validation->run()==false)
		{
			$pagedata = array("title"=>"Signup", "pagename"=>"signup");
			$this->load->view("layout", $pagedata);	

		}
		else
		{

			// $_POST
			// print_r($this->input->post());
			$saveArr['full_name']=$this->input->post("full_name");
			$saveArr['username']=$this->input->post("username");
			$saveArr['password']=sha1($this->input->post("password"));
			$saveArr['address']=$this->input->post("address");
			$saveArr['gender']=$this->input->post("gender");
			$saveArr['city']=$this->input->post("city");
			$saveArr['contact']=$this->input->post("contact");
			// $this->input->post("this is name attribute")
			// $saveArr['this is a column name']
			
			
			$this->User_model->save($saveArr);
			redirect("home/login");
			// header("location:login.php");

		}

		// $this->benchmark->mark('code_end');
		// echo $this->benchmark->elapsed_time('code_start', 'code_end');

	}



	function auth()
	{
		// print_r($this->input->post());
		$u = $this->input->post("username");
		$p = sha1($this->input->post("password"));
		$c = $this->input->post("captcha");
		$result=$this->User_model->find_by_username($u);

		if($c == $this->session->userdata("captcha"))
		{





			if($result->num_rows() == 1)
			{
				// mysqli_fetch_assoc

				$data = $result->row_array();
				if($data['password']==$p)
				{
					$this->session->set_userdata("id", $data['id']);
					$this->session->set_userdata("name", $data['full_name']);
					$this->session->set_userdata("is_user_logged_in", true);
					redirect("user");
				}
				else
				{
					$this->session->set_flashdata("msg", "This Password is Incorrect !");
					redirect("home/login");	
				}
			}
			else
			{
				$this->session->set_flashdata("msg", "This Username and Password is Incorrect !");
				redirect("home/login");			
			}
		}
		else
		{
			$this->session->set_flashdata("msg", "Invalid Captcha");
				redirect("home/login");	
		}

	}

}


?>
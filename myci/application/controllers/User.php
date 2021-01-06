<?php

class User extends MY_Controller{

		

	function index()
	{
		$pagedata = array("title"=>"Dashboard", 'pagename'=>"user/dashboard");
		$this->load->view("layout", $pagedata);
	}
	function profile()
	{
		
		$result=$this->User_model->find_by_id($this->id);

		$pagedata = array("title"=>"My Profile", 'pagename'=>"user/profile", "data"=>$result->row_array());
		$this->load->view("layout", $pagedata);	
	}


	function edit()
	{
		
		$result=$this->User_model->find_by_id($this->id);

		$pagedata = array("title"=>"Edit Profile", 'pagename'=>"user/edit", "data"=>$result->row_array());
		$this->load->view("layout", $pagedata);		
	}

	function update()
	{
		$data = $this->input->post();
		$this->User_model->update($this->id, $data);
		redirect("user/profile");
	}

	function change_pass()
	{
		$pagedata = array("title"=>"Change Password", 'pagename'=>"user/change_pass");
		$this->load->view("layout", $pagedata);		

	}
	function update_pass()
	{

		$a = $this->input->post("current_pass");
		$b = $this->input->post("new_pass");
		$c = $this->input->post("conf_new_pass");
		$result=$this->User_model->find_by_id($this->id);
		$data = $result->row_array();
		
		if($data['password']==sha1($a))
		{
			if($b == $c)
			{
				$data = array("password"=>sha1($b));
				$this->User_model->update($this->id, $data);
				redirect("user/profile");
			}
			else
			{
				$this->session->set_flashdata("msg", "Your New Password and Confirm New Password is Not Correct");
				redirect("user/change_pass");	
			}
		}
		else
		{	
			$this->session->set_flashdata("msg", "Your Current Password is Not Correct");
			redirect("user/change_pass");
		}
	}


	function logout()
	{
		$this->session->sess_destroy();
		redirect('home');
	}
}

?>
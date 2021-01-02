<?php

class Photos extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->library('session');
		$this->load->model("User_model");
		$this->load->model("Photos_model");


		$this->backdoor();

		$this->id = $this->session->userdata("id");
	}
	function backdoor()
	{
		if(! $this->session->userdata("is_user_logged_in"))
			redirect("home");
	}
	function index()
	{
		$result = $this->Photos_model->find_by_user_id($this->id);
		$pagedata = array("title"=>"My Photos", 'pagename'=>"user/photos", "result"=>$result);
		$this->load->view("layout", $pagedata);
	}


	function upload_photo()
	{
		$arr['upload_path'] = "./assets/photos"; // here we set upload path to CI
		$arr['max_size']=2048; // we set maximum file size to CI in kb.
		$arr['allowed_types']="jpg|jpeg|png|gif|bmp"; // set allowd uploaded file type to CI

		$arr['encrypt_name']=true;

		$this->load->library("upload", $arr);

		if($this->upload->do_upload()==true)
		{
			$data = $this->upload->data();
			$saveArr['image_name'] = $data['file_name'];
			$saveArr['title'] = $this->input->post("title");
			$saveArr['user_id'] = $this->id;

			$this->Photos_model->save($saveArr);
			redirect("photos/");

		}
		else
		{
			$msg = $this->upload->display_errors();
			$this->session->set_flashdata("msg", $msg);
			redirect("photos/");
		}
	}
	function delete($a, $b)
	{
		$this->Photos_model->delete($a);
		$path = './assets/photos/'.$b;
		// echo $path;die;
		// delete photos from folder also
		unlink($path); // this fun is remove/delete file from the computer
		redirect("photos/");
		
	}
}





?>
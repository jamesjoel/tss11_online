<?php

class User_model extends CI_Model{


	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->table_name = "user_tbl";
	}


	function save($arr)
	{
		// insert query
		$this->db->insert($this->table_name, $arr);
	}
	function delete()
	{
		// delete query
	}
	function update($id, $arr)
	{
		// update query
		$this->db->where("id", $id);
		$this->db->update($this->table_name, $arr);

	}
	function find()
	{
		// select query
	}
	function find_by_username($u)
	{
		// SELECT * FROM user_tbl WHERE username='$u'

		$this->db->where("username", $u);
		$result=$this->db->get($this->table_name);
		return $result;
	}
	function find_by_id($id)
	{
		// SELECT * FROM user_tbl WHERE id='$id'
		$this->db->where("id", $id);
		$result=$this->db->get($this->table_name);
		return $result;	
	}
}

?>
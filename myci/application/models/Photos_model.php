<?php

class Photos_model extends CI_Model{


	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->table_name = "photos_tbl";
	}


	function save($arr)
	{
		// insert query
		$this->db->insert($this->table_name, $arr);
	}
	function delete($id)
	{
		$this->db->where("id", $id);
		$this->db->delete($this->table_name);
		// DELETE FROM table WHERE id = $id
	}
	function update($id, $arr)
	{
		// update query
		$this->db->where("id", $id);
		$this->db->update($this->table_name, $arr);

	}
	
	function find_by_id($id)
	{
		// SELECT * FROM user_tbl WHERE id='$id'
		$this->db->where("id", $id);
		$result=$this->db->get($this->table_name);
		return $result;	
	}
	function find_by_user_id($id)
	{
		$this->db->where("user_id", $id);
		$result=$this->db->get($this->table_name);
		return $result;		
	}
}


/*

SELECT * FROM student LIMIT 10, 2

$this->db->limit(2, 10);



*/

?>
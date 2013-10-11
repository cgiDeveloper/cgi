<?php

class Download_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function get_file()
	{
		$this->db->select('file_name');
		$this->db->where('status', 1);
		$this->db->order_by("id", "desc");
		$this->db->limit(1);
		$this->db->from('catalog');
		$res = $this->db->get();
		return $res->result_array();
	}
}
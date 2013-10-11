<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Check_user extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function web_admin($uname, $pass)
	{
		$array = array('username'=>$uname, 'password'=>$pass, 'status'=>1);
		$this->db->select('username, password');
		$this->db->where($array);
		$this->db->limit(1);
		$this->db->from('web_admin_user');
		$res = $this->db->get();
		return $res->result_array();
	}
}
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function get_member_region()
	{
		$res = $this->db->query("select distinct id_region, b.region_name from member a, region_name b where a.status = 1 and a.id_region=b.id order by id_region");
		return $res->result_array();
	}

	public function get_member_location($nation,$region)
	{
		$cond = array('id_nation'=>$nation, 'id_region'=>$region, 'status'=>1);
		$this->db->select('store_name, address, destination_address, phone_number, email, pin_bb');
		$this->db->where($cond);
		$this->db->order_by('id_region');
		$this->db->from('member');
		$res = $this->db->get();
		return $res->result_array();
	}

	public function check_member($email, $pass)
	{
		$cond = array('email' => $email, 'password' => md5($pass), 'status' => 1);
		$this->db->select('id, store_name');
		$this->db->where($cond);
		$this->db->limit(1);
		$this->db->from('member');
		$res = $this->db->get();
		return $res->result_array();
	}

	public function check_email($email)
	{
		$cond = array('email' => $email, 'status' => 1);
		$this->db->select('id, email');
		$this->db->where($cond);
		$this->db->limit(1);
		$this->db->from('member');
		$res = $this->db->get();
		return $res->result_array();	
	}

	public function update_pass($id, $email, $pass)
	{
		$cond = array('id' => $id);
		$data = array('password' => $pass);
		$this->db->where('id', $id);
		$this->db->update('member', $data);
	}
}
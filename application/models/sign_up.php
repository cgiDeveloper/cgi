<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sign_up extends CI_model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function get_media($lang)
	{
		$cond = array('status' => 1, 'lang' => $lang);
		$this->db->select('id, media_name');
		$this->db->where($cond);
		$this->db->order_by('id');
		$this->db->from('media');
		$res = $this->db->get();
		return $res->result_array();
	}

	public function get_nation()
	{
		$cond = array('status'=>1);
		$this->db->select('id, nation_name');
		$this->db->where($cond);
		$this->db->from('nation');
		$res = $this->db->get();
		return $res->result_array();
	}

	public function get_region()
	{
		$cond = array('status'=>1);
		$this->db->select('id, region_name');
		$this->db->where($cond);
		$this->db->from('region_name');
		$res = $this->db->get();
		return $res->result_array();
	}

	public function get_item_category($lang)
	{
		$cond = array('status'=>1, 'lang'=>$lang);
		$this->db->select('id, category_name');
		$this->db->where($cond);
		$this->db->order_by('id');
		$this->db->from('product_category');
		$res = $this->db->get();
		return $res->result_array();
	}
}
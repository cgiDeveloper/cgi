<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Menu extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function get_company_profile()
	{
		$this->db->select('phone, bb, email, logo_src');
		$this->db->limit(1);
		$this->db->from('comp_data');
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function get_menu($lang = 'id')
	{
		$this->db->select('text, link, parent_id');
		$this->db->where('lang', $lang);
		$this->db->order_by("order");
		$this->db->from('menu_header');
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function get_menu_footer($lang = 'id')
	{
		$this->db->select('text, link');
		$this->db->where('lang',$lang);
		$this->db->order_by("order");
		$this->db->from('link_footer');
		$query=$this->db->get();
		return $query->result_array();
	}
}
?>
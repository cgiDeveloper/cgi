<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Product extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function get_product_list($cat_id)
	{
		$cond = array('status' => 1, 'id_category' => $cat_id);
		$this->db->select('id, product_name, product_description, img_product');
		$this->db->where($cond);
		$this->db->order_by('order');
		$this->db->from('product');
		$res = $this->db->get();
		return $res->result_array();
		//return "asshole";
	}
}
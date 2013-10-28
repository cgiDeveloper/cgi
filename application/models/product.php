<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Product extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function get_category($lang)
	{
		$category_lang = ($lang == 'en')? 'category_name_en':'category_name_id';
		$options = array('id', $category_lang, 'img_category');
		$options_str = implode(",", $options);
		$cond = array('lang' => $lang, 'status' => 1);
		$this->db->select($options_str);
		$this->db->where($cond);
		$this->db->order_by('id');
		$this->db->from('product');
		$res = $this->db->get();
		return $res->result_array();
	}
}
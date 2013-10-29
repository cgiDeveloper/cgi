<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Category extends CI_Model
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
		$cond = array('status' => 1);
		$this->db->select($options_str);
		$this->db->where($cond);
		$this->db->order_by('order');
		$this->db->from('product_category');
		$res = $this->db->get();
		return $res->result_array();
	}

	public function get_category_id($lang, $name)
	{
		$category_lang = ($lang == 'en')? 'category_name_en':'category_name_id';
		$options = array('id, img_category_big');
		$options_str = implode(",", $options);
		$cond = array('status' => 1, $category_lang => $name);
		$this->db->select($options_str);
		$this->db->where($cond);
		$this->db->order_by('id');
		$this->db->limit(1);
		$this->db->from('product_category');
		$res = $this->db->get();
		return $res->result_array();
	}
}
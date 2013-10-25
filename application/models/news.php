<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function get_news_list($lang)
	{
		$cond = array('lang'=>$lang, 'status'=>1);
		$this->db->select('id, title, content, created_time');
		$this->db->where($cond);
		$this->db->order_by('created_time desc');
		$this->db->from('news');
		$res = $this->db->get();
		return $res->result_array();
	}

	public function get_news_detail($lang, $id)
	{
		$cond = array('lang'=>$lang, 'status'=>1, 'id'=>$id);
		$this->db->select('id, title, content, created_time');
		$this->db->where($cond);
		$this->db->limit(1);
		$this->db->from('news');
		$res = $this->db->get();
		return $res->result_array();
	}
}
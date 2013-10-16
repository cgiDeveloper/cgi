<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Content extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function get_content($lang, $page)
	{
		$cond = array('status'=>1, 'lang'=>$lang, 'page'=>$page);
		$this->db->select('content, title, img_src');
		$this->db->where($cond);
		$this->db->limit(1);
		$this->db->from('page_contents');
		$query = $this->db->get();
		return $query->result_array();
	}
}
?>
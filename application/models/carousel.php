<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Carousel extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function get_carousel()
	{
		$this->db->select('img_src, link, alt_image, order');
		$this->db->where('status', 1);
		$this->db->order_by('order');
		$this->db->from('carousel_img');
		$query = $this->db->get();
		return $query->result_array();
	}
}
?>
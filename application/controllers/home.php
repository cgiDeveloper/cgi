<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('carousel');
	}
	
	public function index()
	{
		$resultsCarousel = $this->carousel->get_carousel();
		$data['carousel'] = $resultsCarousel;
		$this->load->view('/home/index_view', $data);
	}
}
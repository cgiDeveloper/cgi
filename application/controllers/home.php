<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('menu');
		$this->load->helper('form');
		$this->load->model('carousel');
	}
	
	public function index()
	{
		$resultsFooter = $this->menu->get_menu_footer('en');
		$resultsCompData = $this->menu->get_company_profile();
		$resultsMenu = $this->menu->get_menu('en');
		$resultsCarousel = $this->carousel->get_carousel();
		//echo "<pre>";print_r($resultsCarousel);
		$data['comp'] = $resultsCompData;
		$data['footer'] = $resultsFooter;
		$data['menu'] = $resultsMenu;
		$data['carousel'] = $resultsCarousel;
		$this->load->view('/home/index_view', $data);
	}
}
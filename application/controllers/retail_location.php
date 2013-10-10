<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Retail_location extends CI_Controller 
{
	public function index()
	{
		$this->load->view('/retail_location/index_view');
	}
}
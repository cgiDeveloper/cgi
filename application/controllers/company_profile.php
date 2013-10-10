<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Company_profile extends CI_Controller 
{
	public function index()
	{
		$this->load->view('/company_profile/index_view');
	}
}
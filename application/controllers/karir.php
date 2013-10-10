<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class karir extends CI_Controller 
{
	public function index()
	{
		$this->load->view('/karir/index_view');
	}
}
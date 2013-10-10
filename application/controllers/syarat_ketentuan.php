<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Syarat_ketentuan extends CI_Controller 
{
	public function index()
	{
		$this->load->view('/syarat_ketentuan/index_view');
	}
}
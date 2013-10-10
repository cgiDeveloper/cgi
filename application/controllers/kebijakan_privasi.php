<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kebijakan_privasi extends CI_Controller 
{
	public function index()
	{
		$this->load->view('/kebijakan_privasi/index_view');
	}
}
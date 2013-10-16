<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->lang->load('message', 'english');
	}
	
	public function index()
	{
		$data['question'] = $this->lang->line('forget');
		$data['reseller_msg'] = $this->lang->line('register_msg');
		$this->load->view('/login/index_view', $data);
	}
}
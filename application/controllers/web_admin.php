<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Web_admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
	}
	
	public function index()
	{
		if($this->session->userdata('username'))
			$this->load->view('/web_admin/index_view');
		else
			redirect($this->config->site_url()."/web_admin/login");
	}
	
	public function login()
	{
		$this->load->view('/web_admin/login_view');
	}
	
	public function check()
	{
		$uname = $this->input->post('username');
		$pass = $this->input->post('password');
		$this->load->model('check_user');
		$user = $this->check_user->web_admin($uname, $pass);
		if($user)
		{
			foreach($user as $user_data)
				$this->session->set_userdata(array('username'=>$user_data['username'], 'password'=>$user_data['password']));
			redirect($this->config->site_url()."/web_admin/");
		}
		else
			redirect($this->config->site_url()."/web_admin/login");
	}
	
	public function logout()
	{
		$this->session->sess_destroy();
		redirect($this->config->site_url()."/web_admin");
	}
}
?>
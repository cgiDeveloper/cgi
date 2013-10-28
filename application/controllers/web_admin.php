<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Web_admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->language = 'indonesia';
		$this->code_lang = 'ind';
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
		$this->load->model('check_user');
		$this->lang->load('err_message', 'indonesia');

		$uname = htmlentities($this->input->post('username'));
		$pass = htmlentities($this->input->post('password'));
		$user = $this->check_user->web_admin($uname, $pass);
		if($user)
		{
			foreach($user as $user_data)
				$this->session->set_userdata(array('username'=>$user_data['username'], 'password'=>$user_data['password']));
			redirect($this->config->site_url()."/web_admin/");
		}
		else
		{
			$this->session->set_flashdata('err_user', $this->lang->line('err_login'));
			redirect($this->config->site_url()."/web_admin/login");
		}
	}
	
	public function logout()
	{
		$this->session->sess_destroy();
		redirect($this->config->site_url()."/web_admin");
	}
}
?>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member_pages extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->language = 'english';
		$this->code_lang = 'en';
		$this->lang->load('err_message', $this->language);
	}

	public function check_login()
	{
		$this->load->model('member');
		
		$email = htmlentities($this->input->post('inputemail'));
		$pass = htmlentities($this->input->post('inputpassword'));		
		$ismember = $this->member->check_member($email, $pass);
		if($ismember)
		{
			$this->session->set_userdata(array('id'));
			redirect($this->config->site_url()."/member/");
		}
		else
		{
			$this->session->set_flashdata('err_message', $this->lang->line('err_login'));
			redirect($this->config->site_url()."/pages/login");
		}
	}

	public function forget_password()
	{
		$this->load->model('member');
		$this->lang->load('message', $this->language);

		$email = htmlentities($this->input->post('inputemail'));
		$ismember = $this->member->check_email($email);
		if($ismember)
		{
			$new_pass = substr(MD5(microtime()), 0, 20);
			$this->member->update_pass($ismember[0]['id'], $ismember[0]['email'], $new_pass);
			
			$this->load->library('email');
			$this->email->from('support@cgi.co.id', 'Support CGI');
			$this->email->to($ismember[0]['email']); 
			$this->email->subject('Request Password');
			$this->email->message($this->lang->line('email_msg').$new_pass);
			$this->email->send();

			$this->session->set_flashdata('succ_forget_pass', $this->lang->line('succ_forget_password'));
			redirect($this->config->site_url()."/pages/forget_password");
		}
		else
		{
			$this->session->set_flashdata('err_forget_pass', $this->lang->line('err_forget_password'));
			redirect($this->config->site_url()."/pages/forget_password");
		}
	}
}
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('content');
		$this->lang->load('message', 'english');
	}
	
	public function index()
	{
		$name_class = strtolower(get_class($this));
		$results = $this->content->get_content('en', $name_class);
		$data['title'] = $results[0]['title'];
		$data['content'] = $results[0]['content'];
		$data['images'] = $results[0]['img_src'];
		$data['dl_message'] = $this->lang->line('content_download'); 
		$this->load->view('/'.$name_class.'/index_view', $data);
	}
}
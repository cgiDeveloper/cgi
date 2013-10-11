<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Download_catalog extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('download');
		$this->load->model('download_model');
	}
	
	public function index()
	{
		$file = $this->download_model->get_file();
		$data = file_get_contents($this->config->base_url()."catalog/".$file[0]['file_name']); // Read the file's contents
		$name = 'Cgi Catalog.pdf';

		force_download($name, $data);
	}
}
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->language = 'english';
		$this->code_lang = 'en';
		$this->lang->load('message', $this->language);
	}

	private function get_contents($lang, $func_name)
	{
		$this->load->model('content');

		$results = $this->content->get_content($lang, $func_name);
		$data['title'] = $results[0]['title'];
		$data['content'] = $results[0]['content'];
		$data['images'] = $results[0]['img_src'];
		return $data;
	}

	public function index()
	{
		$this->load->helper('form');
		$this->load->model('carousel');

		$data['dl_message'] = $this->lang->line('content_download'); 
		$resultsCarousel = $this->carousel->get_carousel();
		$data['carousel'] = $resultsCarousel;
		$this->load->view('/home/index_view', $data);
	}

	public function about()
	{
		$data = $this->get_contents($this->code_lang, __FUNCTION__);
		$data['dl_message'] = $this->lang->line('content_download'); 
		$this->load->view('/'.__FUNCTION__.'/index_view', $data);
	}

	public function contact()
	{
		$data = $this->get_contents($this->code_lang, __FUNCTION__);
		$data['dl_message'] = $this->lang->line('content_download'); 
		$this->load->view('/'.__FUNCTION__.'/index_view', $data);
	}

	public function career()
	{
		$data = $this->get_contents($this->code_lang, __FUNCTION__);
		$data['dl_message'] = $this->lang->line('content_download'); 
		$this->load->view('/'.__FUNCTION__.'/index_view', $data);
	}

	public function privacy()
	{
		$data = $this->get_contents($this->code_lang, __FUNCTION__);
		$data['dl_message'] = $this->lang->line('content_download'); 
		$this->load->view('/'.__FUNCTION__.'/index_view', $data);
	}

	public function news()
	{
		$this->load->view('/'.__FUNCTION__.'/index_view');
	}

	public function retail_location()
	{
		$this->load->view('/'.__FUNCTION__.'/index_view');	
	}

	public function product()
	{
		$this->load->view('/'.__FUNCTION__.'/index_view');
	}

	public function get_product()
	{
		$this->load->view('/'.__FUNCTION__.'/index_view');
	}

	public function login()
	{
		$this->load->helper('form');

		$this->lang->load('message', $this->language);
		$data['question'] = $this->lang->line('forget');
		$data['reseller_msg'] = $this->lang->line('register_msg');
		$this->load->view('/'.__FUNCTION__.'/index_view', $data);
	}

	public function catalog_download()
	{
		$this->load->helper('download');
		$this->load->model('download_model');

		$file = $this->download_model->get_file();
		$data = file_get_contents($this->config->base_url()."catalog/".$file[0]['file_name']); // Read the file's contents
		$name = 'Cgi Catalog.pdf';

		force_download($name, $data);
	}
}
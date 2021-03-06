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
		$this->load->model(__FUNCTION__);
		$this->load->helper('text');

		$data['news'] = $this->news->get_news_list($this->code_lang);
		$data['title'] = $this->get_contents($this->code_lang, __FUNCTION__);
		$data['dl_message'] = $this->lang->line('content_download');

		//echo "<pre>";print_r($data['news']);
		$this->load->view('/'.__FUNCTION__.'/index_view', $data);
	}

	public function news_detail($id)
	{
		$this->load->model('news');

		$data['news'] = $this->news->get_news_detail($this->code_lang, $id);
		$data['title'] = $this->get_contents($this->code_lang, 'news');
		$data['dl_message'] = $this->lang->line('content_download');

		//echo "<pre>";print_r($data);
		$this->load->view('/news/news_detail_view', $data);
	}

	public function retail_location()
	{
		$this->load->model('member');

		$data['dl_message'] = $this->lang->line('content_download'); 
		$data['region_name'] = $this->member->get_member_region();
		for($i=0;$i<count($data['region_name']);$i++)
			$data['region_name'][$i]['child'] = $this->member->get_member_location(1, $data['region_name'][$i]['id_region']);
		$data['title'] = $this->get_contents($this->code_lang, __FUNCTION__);
		//echo "<pre>";print_r($data['region_name']);

		$this->load->view('/'.__FUNCTION__.'/index_view', $data);	
	}

	public function product()
	{
		$this->load->model('category');

		$data = $this->get_contents($this->code_lang, __FUNCTION__);
		$data['dl_message'] = $this->lang->line('content_download');
		$data['category'] = $this->category->get_category($this->code_lang);
		//echo "<pre>";print_r($data);
		$this->load->view('/'.__FUNCTION__.'/index_view', $data);
	}

	public function category_product($name)
	{
		$this->load->model('product');
		$this->load->model('category');

		$data['dl_message'] = $this->lang->line('content_download');
		$idproduct = htmlentities($name);
		$category_id = $this->category->get_category_id($this->code_lang, $name);
		$data['products'] = $this->product->get_product_list($category_id[0]['id']);
		$data['img_category'] = $category_id[0]['img_category_big'];
		$data['title'] = ucfirst($this->uri->segment(2));
		$data['breadcrumbs'] = array(ucfirst($this->uri->segment(1)), ucfirst($this->uri->segment(2)));
		//echo "<pre>";print_r($data);
		$this->load->view('/'.__FUNCTION__.'/index_view', $data);
	}	

	public function get_product($name)
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

	public function forget_password()
	{
		$this->load->helper('form');

		$this->lang->load('message', $this->language);
		$data['question'] = $this->lang->line('forget_msg');
		$this->load->view('/'.__FUNCTION__.'/index_view', $data);
	}

	public function sign_up()
	{
		$this->load->helper('form');
		$this->load->model(__FUNCTION__);
		$this->lang->load('registration', $this->language);

		$data['first_name'] = $this->lang->line('first_name');
		$data['last_name'] = $this->lang->line('last_name');
		$data['store_name'] = $this->lang->line('store_name');
		$data['email'] = $this->lang->line('email');
		$data['phone'] = $this->lang->line('phone');
		$data['pin_bb'] = $this->lang->line('pin_bb');
		$data['address'] = $this->lang->line('address');
		$data['destination_address'] = $this->lang->line('destination_address');
		$data['nation_name'] = $this->lang->line('nation_name');
		$data['region_name'] = $this->lang->line('region_name');
		$data['website'] = $this->lang->line('website');
		$data['omzet'] = $this->lang->line('omzet');
		$data['total_employee'] = $this->lang->line('total_employee');
		$data['questionaire'] = $this->lang->line('questionaire');
		$data['title_page'] = $this->lang->line('title_page');
		$data['legend1'] = $this->lang->line('legend1');
		$data['legend2'] = $this->lang->line('legend2');
		$data['legend3'] = $this->lang->line('legend3');
		$data['register'] = $this->lang->line('register');
		$data['member_items'] = $this->lang->line('member_items');
		$data['member_interests'] = $this->lang->line('member_interests');

		$data['media'] = $this->sign_up->get_media($this->code_lang);
		$data['nations'] = $this->sign_up->get_nation();
		$data['regions'] = $this->sign_up->get_region();
		$data['category_product'] = $this->sign_up->get_item_category($this->code_lang);
		//echo "<pre>";print_r($data['media']);

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
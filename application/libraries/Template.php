<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Template
{
	public function __construct($params)
	{
		$this->ci_instance =& get_instance();
		$this->ci_instance->lang->load('template', $params['lang']);		
		$this->ci_instance->load->model('menu');
		$this->model = $this->ci_instance->menu;
	}
	
	public function set_template($template)
	{
		if($template=='footer')
			return $this->model->get_menu_footer('en');
		else if($template=='header')
			return $this->model->get_menu('en');
	}
	
	public function get_company_profile()
	{
		return $this->model->get_company_profile();
	}
	
	public function get_header_words($lang='english')
	{
		$data['account'] = $this->ci_instance->lang->line('account');
		$data['login'] = $this->ci_instance->lang->line('login');
		$data['signup'] = $this->ci_instance->lang->line('signup');
		$data['download'] = $this->ci_instance->lang->line('download');
		$data['telp'] = $this->ci_instance->lang->line('telp');
		$data['bb'] = $this->ci_instance->lang->line('bb');
		return $data;
	}
	
	public function get_footer_words($lang = 'english')
	{
		$data['product'] = $this->ci_instance->lang->line('product');
		$data['fb'] = $this->ci_instance->lang->line('fb');
		$data['twitter'] = $this->ci_instance->lang->line('twitter');
		$data['share'] = $this->ci_instance->lang->line('share');
		return $data;
	}
}
?>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Template
{
	public function __construct()
	{
		$this->ci_instance =& get_instance(); 
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
}
?>
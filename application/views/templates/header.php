<?php
//call the template library
	$ci = & get_instance();
	$ci->load->library('template');
	$menu = $ci->template->set_template('header');
?>
<div id="header">
	<div id="header-logo" class="header-wrap">
		<a href="<?php echo $this->config->site_url();?>/home"><img src="<?php echo $this->config->base_url();?>images/logo.png" /></a>
	</div>
	<div id="header-contact" class="header-wrap">
		<div id="info-comp">
		</div>
		<div id="myaccount">
			<div style="float:left;"><label>My account</label></div>
			<div style="float:left;margin-left:10px;margin-top:1px;"><a href="#">Login</a> | <a href="#">Sign up</a> | <a href="#">Download Catalog</a></div>
			<div class="clear"></div>
		</div>
	</div>
	<div class="clear"></div>
</div>
<div id="menu">
	<ul>
	<?php
		foreach($menu as $list_menu)
		{
			echo "<li><a href='".$this->config->site_url()."/".$list_menu['link']."'>".$list_menu['text']."</a></li>";
		}		
	?>
	</ul>
	<div class="clear"></div>
</div>
<div class="clear"></div>
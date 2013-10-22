<?php
//call the template library
	$ci = & get_instance();
	$params = array('lang' => 'english');
	$ci->load->library('template', $params);
	$menu = $ci->template->set_template('header');
	$words = $ci->template->get_header_words();
	$comp = $ci->template->get_company_profile();	
?>
<!-- start of header -->
<div id="header">
	<div id="header-logo" class="header-wrap">
		<a href="<?php echo $this->config->site_url();?>/home"><img src="<?php echo $this->config->base_url();?>images/logo.png" /></a>
	</div>
	<div id="header-contact" class="header-wrap">
		<div id="info-comp">
			<ul>
				<li><?php echo $words['telp']." : ".$comp[0]['phone'];?></li>
				<li><?php echo $words['bb']." : ".$comp[0]['bb'];?></li>
				<li>E-mail : <?php echo $comp[0]['email'];?></li>
			</ul>
			<div class="clear"></div>
		</div>
		<div id="myaccount">
			<div style="float:left;"><label><?php echo $words['account'];?></label></div>
			<div style="float:left;margin-left:10px;margin-top:1px;"><a href="<?php echo $this->config->site_url();?>/pages/login"><?php echo $words['login'];?></a> | <a href="<?php echo $this->config->site_url();?>/pages/sign_up"><?php echo $words['signup'];?></a> | <a href="<?php echo $this->config->site_url();?>/pages/catalog_download"><?php echo $words['download'];?></a></div>
			<div class="clear"></div>
		</div>
	</div>
	<div class="clear"></div>
</div>
<!-- end of header -->
<!-- start of menu -->
<div id="menu">
	<ul>
	<?php
		foreach($menu as $list_menu)
		{
			if($list_menu['child'])
			{
				$submenu = "<li class='main-menu haschild'><a href='".$this->config->site_url()."/".$list_menu['link']."'>".$list_menu['text']."</a><div class='submenu'><ul>";
				foreach($list_menu['child'] as $child_menu)
				{
					$submenu .= "<li class='child-menu'><a href='".$this->config->site_url()."/".$child_menu['link']."'>".$child_menu['text']."</a>";
					if($child_menu['child'])
					{
						$submenu .= "<ul>";
						foreach($child_menu['child'] as $child_menu2)
						{
							$submenu .= "<li class='child-menu2'><a href='".$this->config->site_url()."/".$child_menu2['link']."'>".$child_menu2['text']."</a>";
						}
						$submenu .= "</ul>";
					}
					$submenu .= "</li>";
				}
				$submenu .= "</ul></div></li>";
				echo $submenu;
			}
			else
				echo "<li class = 'main-menu'><a href='".$this->config->site_url()."/".$list_menu['link']."'>".$list_menu['text']."</a></li>";
		}		
	?>
	</ul>
	<div class="clear"></div>
</div>
<!-- end of menu -->
<div class="clear"></div>
	<!--<div id="header">
		<div id="top-nav">
			<div id="top-nav-wrapper">
				<div id="user">
					<a href="<?php echo $this->config->site_url()?>/login">Login</a>
				</div>
				<div id="contact">
					Contact Us 
					<?php
						foreach($comp as $profile)
							echo "Telp : ".$profile['phone']." Pin BB : ".$profile['bb']." E-mail : ".$profile['email'];
					?>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<!--<div id="menu">
			<div id="logo">
				<a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>images/logo.png"></img></a>
			</div>
			<div id="menu-nav">
				<ul>
					<li><a href="#" class="first-nav"=>Home</a></li>
					<li><a href="#">Retail Location</a></li>
					<li><a href="#">About Us</a></li>
					<li><a href="#">Contact</a></li>
					<li><a href="#" class="last-nav">Download Catalog</a></li>
				</ul>
			</div>
			<div id="socmedlist">
				<ul>
					<li><a href="#"><img src="<?php echo base_url();?>images/facebook.png" /></a></li>
					<li><a href="#"><img src="<?php echo base_url();?>images/twitter.png" /></a></li>
					<li><a href="#"><img src="<?php echo base_url();?>images/instagram.png" /></a></li>
				</ul>
			</div>
			<div class="clear"></div>
		</div>
	</div>-->
<div id="header">
	<div id="header-logo" class="header-wrap">
		<a href="<?php echo $this->config->site_url();?>/home"><img src="<?php echo $this->config->base_url();?>images/logo.png" /></a>
	</div>
	<div id="header-contact" class="header-wrap">
		lorem ipsum dolor sit amet
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
		/*echo "<li>".form_open('search');
		$formquery = array('name'=>'formquery','id'=>'formquery','placeholder'=>'Search');
		echo form_input($formquery);
		echo form_close()."</li>";*/
	?>
	</ul>
	<div class="clear"></div>
</div>
<div class="clear"></div>
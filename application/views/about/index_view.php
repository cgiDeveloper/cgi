<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head><title></title></head>
<link rel="stylesheet" href="<?php echo base_url();?>css/style.css" type="text/css"></link>
<link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css" type="text/css"></link>
<link rel="stylesheet" href="<?php echo base_url();?>css/page-content.css" type="text/css"></link>
<body>
	<?php 
		$this->load->view('/templates/header');
	?>
	<div class="page-content-wrapper">
		<div class="image-content-banner">
			<img src="<?php echo base_url().'images/'.$images;?>" />
		</div>
		<div class="content-wrapper">
			<div class="title-content">
				<h1><?php echo $title; ?></h1>
			</div>
			<div class="real-content">
				<div id="text-content"><?php echo $content;?></div>
				<div id="image-content"><img src="<?php echo base_url();?>images/cth-about-banner.jpg" /></div>
				<div class="clear"></div>
			</div>
		</div>
		<div class="catalog-download">
			<a href="<?php echo $this->config->site_url();?>/pages/catalog_download"><?php echo $dl_message;?></a>
		</div>
	</div>
	<?php
		$this->load->view('/templates/footer');
	?>
	<script src="<?php echo $this->config->base_url();?>js/jquery.js"></script>
	<script src="<?php echo $this->config->base_url();?>js/bootstrap.min.js"></script>	
</body>
</html>
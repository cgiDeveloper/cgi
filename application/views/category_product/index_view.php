<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head><title></title></head>
<link rel="stylesheet" href="<?php echo base_url();?>css/style.css" type="text/css"></link>
<link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css" type="text/css"></link>
<link rel="stylesheet" href="<?php echo base_url();?>css/page-content.css" type="text/css"></link>
<style type="text/css">
.breadcrumb{
	background-color: #fff;
	padding:0px;
	margin:0px 0px 0px 2px;
}
.breadcrumb li a{
	color:#7e7e7e;
}
</style>
<body>
	<?php $this->load->view('/templates/header');?>
	<div class="page-content-wrapper">
		<div class="image-content-banner">
			<img src="<?php echo base_url().'images/'.$img_category;?>" />
		</div>
		<div class="content-wrapper">
			<ul class="breadcrumb">
			  <!--<li><a href="#">Home</a> <span class="divider">/</span></li>
			  <li><a href="#">Library</a> <span class="divider">/</span></li>
			  <li class="active">Data</li>-->
				<?php
				foreach($breadcrumbs as $breadcrumb)
					echo "<li><a href='#'>".$breadcrumb."</a> <span class='divider'>/</span></li>";
				?>
			</ul>
			<div class="title-content">
				<h1><?php echo $title; ?></h1>
			</div>
			<div class="real-content">
				<ul class='category'>
				</ul>
				<?php
				foreach($products as $product)
				{
					echo "<li class='category-list'><div class='categoryimage'><a href='#'><img src='".base_url()."images/".$product['img_product']."' /></a></div><div class='categoryname'><a href='#'>".$product['product_name']."</a></div></li>";
				}
				?>				
				<div class="clear"></div>
			</div>
		</div>
		<div class="catalog-download">
			<a href="<?php echo $this->config->site_url();?>/pages/catalog_download"><?php echo $dl_message;?></a>
		</div>
	</div>
	<?php $this->load->view('/templates/footer');?>
</body>
</html>
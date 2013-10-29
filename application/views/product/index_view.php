<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head><title></title></head>
<link rel="stylesheet" href="<?php echo base_url();?>css/style.css" type="text/css"></link>
<link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css" type="text/css"></link>
<link rel="stylesheet" href="<?php echo base_url();?>css/page-content.css" type="text/css"></link>
<body>
	<?php $this->load->view('/templates/header');?>
	<div class="page-content-wrapper">
		<div class="image-content-banner">
			<img src="<?php echo base_url().'images/'.$images;?>" />
		</div>
		<div class="content-wrapper">
			<div class="title-content">
				<h1><?php echo $title; ?></h1>
			</div>
			<div class="real-content">
				<ul class='category'>
				</ul>
				<?php
				foreach($category as $category_item)
				{
					if($category_item['category_name_en'])
					{
						//echo $category_item['category_name_en'];
						echo "<li class='category-list'><div class='categoryimage'><a href='".$this->config->site_url()."product/".url_title($category_item['category_name_en'])."'><img src='".base_url()."images/".$category_item['img_category']."' /></a></div><div class='categoryname'><a href='".$this->config->site_url()."product/".url_title($category_item['category_name_en'])."'>".$category_item['category_name_en']."</a></div></li>";
					}
					else
					{
						//echo $category_item['category_name_id'];
						echo "<li class='category-list'><div class='categoryimage'><a href='".$this->config->site_url()."product/".url_title($category_item['category_name_id'])."'><img src='".base_url()."images/".$category_item['img_category']."' /></a></div><div class='categoryname'><a href='".$this->config->site_url()."product/".url_title($category_item['category_name_id'])."'>".$category_item['category_name_id']."</a></div></li>";
					}
				}
				?>
				<!--<ul class='category'>
					<li class='category-list'>
						<div class='categoryimage'>
							<a href='#'><img src='http://localhost/cgi/images/product-image.jpg' /></a>
						</div>
						<div class='categoryname'>
							<a href='#'>Blanket</a>
						</div>
					</li>
					<li class="category-list">
						<div class="categoryimage">
							<a href="#"><img src="http://localhost/cgi/images/product-image.jpg" /></a>
						</div>
						<div class="categoryname">
							<a href="#">Bedsheet</a>
						</div>
					</li>
				</ul>-->
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
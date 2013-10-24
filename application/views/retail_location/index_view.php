<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head><title></title></head>
<link rel="stylesheet" href="<?php echo base_url();?>css/style.css" type="text/css"></link>
<link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css" type="text/css"></link>
<link rel="stylesheet" href="<?php echo base_url();?>css/page-content.css" type="text/css"></link>
<link rel="stylesheet" href="<?php echo base_url();?>css/reseller-location.css" type="text/css"></link>
<style type="text/css">
</style>
<body>
	<?php $this->load->view('/templates/header');?>
	<div class="page-content-wrapper">
		<div class="content-wrapper">
			<div class="title-content">
				<h1><?php echo $title['title']; ?></h1>
			</div>
			<div class="reseller-list">
				<?php
					foreach ($region_name as $region) 
					{
						$region_content ="<h3 class='toggle-title'><a class='region-name'>$region[region_name]</a></h3>";
						$region_content .="<div class='region-list-box'><ul>";
						foreach($region['child'] as $reseller_list)
						{
							$region_content .= "<li class='reseller-list'><div class='reseller-box'><h3 class='reseller-name'>".$reseller_list['store_name']."</h3><div class='reseller-content'><div class='reseller-add reseller-data'>".$reseller_list['address']."</div><div class='reseller-data'>".$reseller_list['email']."</div><div class='reseller-data'>".$reseller_list['phone_number']."</div><div class='reseller-data'>".$reseller_list['pin_bb']."</div></div></div></li>";
						}
						$region_content .= "</ul><div class='clear'></div></div>";
						echo $region_content;
					}
				?>
			</div>
		</div>
		<div class="catalog-download">
			<a href="<?php echo $this->config->site_url();?>/pages/catalog_download"><?php echo $dl_message;?></a>
		</div>
	</div>
	<?php $this->load->view('/templates/footer');?>
	<script src="<?php echo base_url();?>js/jquery.js"></script>
	<script src="<?php echo base_url();?>js/jquery-ui-1.10.3.custom.min.js"></script>
	<script type="text/javascript">
		$(function(){
			$(".toggle-title a").click(function(){
				 var parent = $(this).parent();
				 parent.next().slideToggle();
			});
		});
	</script>
</body>
</html>
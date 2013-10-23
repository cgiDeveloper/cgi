<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head><title></title></head>
<link rel="stylesheet" href="<?php echo base_url();?>css/style.css" type="text/css"></link>
<link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css" type="text/css"></link>
<link rel="stylesheet" href="<?php echo base_url();?>css/page-content.css" type="text/css"></link>
<body>
	<?php $this->load->view('/templates/header');?>
	<div class="page-content-wrapper">
		<div class="content-wrapper">
			<div class="title-content">
				<h1><?php echo $title['title']; ?></h1>
			</div>
		</div>
	</div>
	<?php $this->load->view('/templates/footer');?>
</body>
</html>
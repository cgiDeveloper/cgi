<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head><title></title></head>
<link rel="stylesheet" href="<?php echo base_url();?>css/style.css" type="text/css"></link>
<link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css" type="text/css"></link>
<link rel="stylesheet" href="<?php echo base_url();?>css/page-content.css" type="text/css"></link>
<link rel="stylesheet" href="<?php echo base_url();?>css/news.css" type="text/css"></link>
<body>
	<?php $this->load->view('/templates/header');?>
	<div class="page-content-wrapper">
		<div class="content-wrapper">
			<div class="title-content">
				<h1 class="title-news-detail"><a href="<?php echo $this->config->site_url().'/pages/news';?>"><?php echo $title['title']; ?></a></h1>
			</div>
			<?php
				foreach($news as $news_list)
				{
					echo "<div class='news-box'><div class='news-header'><h3 class='news-title'>".$news_list['title']."</h3><p class='post-time'>Posted on ".date("j F Y", strtotime($news_list['created_time']))."</p></div><div class='news-content'>".$news_list['content']."</div></div>";
				}
			?>
		</div>
		<div class="catalog-download">
			<a href="<?php echo $this->config->site_url();?>/pages/catalog_download"><?php echo $dl_message;?></a>
		</div>
	</div>
	<?php $this->load->view('/templates/footer');?>
</body>
</html>
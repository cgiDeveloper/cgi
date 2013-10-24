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
			<!--<div class="news-box">
				<div class="news-header">
					<h3 class="news-title"><a href="#">contoh judul</a></h3>
					<p>Posted on 22-jul-2013</p>
				</div>
				<div class="news-content">
					akljdffdljksfdjlkfdslkjfdlkjfdlkjfdlkjsdfkjl
				</div>
				<div class="news-detail-btn">
					<a href="#" class="btn">more detail</a>
				</div>
			</div>-->
			<?php
				foreach($news as $news_list)
				{
					echo "<div class='news-box'><div class='news-header'><h3 class='news-title'><a href='#'>".$news_list['title']."</a></h3><p>Posted on ".date("j F Y", strtotime($news_list['created_time']))."</p></div><div class='news-content'>".$news_list['content']."</div><div class='news-detail-btn'><a href='#' class='btn btn-success'>more detail</a></div></div>";
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
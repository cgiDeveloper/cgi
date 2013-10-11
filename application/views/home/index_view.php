<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head><title></title></head>
<link rel="stylesheet" href="<?php echo base_url();?>css/style.css" type="text/css"></link>
<link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css" type="text/css"></link>
<body>
	<?php 
		$this->load->view('/templates/header');
	?>
	<div id="carousel-container">
		  <div id="this-carousel-id" class="carousel slide">
			<div class="carousel-inner">
			  <!--<div class="item active">
				<a href="http://hubblesite.org/gallery/album/entire/pr2006046a/xlarge_web/npp/128/">  
					<img src="<?php echo $this->config->base_url()?>images/antennae.jpg" alt="Antennae Galaxies" />
				</a>
			  </div>
			  <div class="item">
				<a href="http://hubblesite.org/gallery/album/entire/pr2007016e/xlarge_web/npp/128/">
				  <img src="<?php echo $this->config->base_url()?>images/carina.jpg" alt="Carina Caterpillar" />
				</a>
			  </div>
			  <div class="item">
				<a href="http://hubblesite.org/gallery/album/entire/pr2003010i/npp/128/">
				  <img src="<?php echo $this->config->base_url()?>images/echo.jpg" alt="Light Echo" />
				</a>				
			  </div>
			  <div class="item">
				<a href="http://hubblesite.org/gallery/album/entire/pr2006024a/xlarge_web/npp/128/">
				  <img src="<?php echo $this->config->base_url()?>images/ngc5866.jpg" alt="Galaxy NGC5866" />
				</a>				
			  </div>-->
				<?php
					foreach($carousel as $img_list)
					{
						if($img_list['order']==1)
							echo "<div class='item active'><a href='".$img_list['link']."'><img src='".$this->config->base_url()."images/".$img_list['img_src']."' alt='".$img_list['alt_image']."' /></a>				</div>";
						else
							echo "<div class='item'><a href='".$img_list['link']."'><img src='".$this->config->base_url()."images/".$img_list['img_src']."' alt='".$img_list['alt_image']."' /></a>				</div>";
					}
				?>
			</div><!-- .carousel-inner -->
			<!--  next and previous controls here
				  href values must reference the id for this carousel -->
			  <a class="carousel-control left" href="#this-carousel-id" data-slide="prev">&lsaquo;</a>
			  <a class="carousel-control right" href="#this-carousel-id" data-slide="next">&rsaquo;</a>
		  </div>
		  <!-- end carousel -->
	</div>
	<?php
		$this->load->view('/templates/footer');
	?>
	<script src="<?php echo $this->config->base_url();?>js/jquery.js"></script>
	<script src="<?php echo $this->config->base_url();?>js/bootstrap.min.js"></script>
	<script>
		$(document).ready(function(){
			$('.carousel').carousel({
				interval: 3000
			});
		});
    </script>
</body>
</html>
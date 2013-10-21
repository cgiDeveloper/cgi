<?php
//call the template library
	$ci = & get_instance();
	$params = array('lang' => 'english');
	$ci->load->library('template', $params);
	$footer = $ci->template->set_template('footer');
	$words = $ci->template->get_footer_words();
?>
<div id="footerpagewrapper">
	<div id="footerpagetitle"><?php echo $words['product'];?></div>
	<div id="footerpageproducts">
		<div id="footerpagelink">
			<ul>
			<?php 			
				foreach($footer['product_footer'] as $footer_link)
				{
					if($footer_link['child'])
					{
						$footer_link_children = "<li class='category'><a href='".$this->config->site_url()."/".$footer_link['link']."'>".$footer_link['text']."</a>";
						foreach($footer_link['child'] as $child)
						{
							$footer_link_children .= "<ul>";
							$footer_link_children .= "<li><a href='".$this->config->site_url()."/".$child['link']."'>".$child['text']."</a></li>";
							$footer_link_children .= "</ul>";
						}
						$footer_link_children .= "</li>";
						echo $footer_link_children;
					}
					else
						echo "<li class='category'><a href='".$this->config->site_url()."/".$footer_link['link']."'>".$footer_link['text']."</a></li>";
				}
			?>
			</ul>
		</div>
		<div id="footerpagesocmed">
			<div class="socmedrow" style="color:#3B5998">
				<?php echo $words['fb']; ?>
				<div class="socmedicon">
					<a href="https://www.facebook.com/CGIhomebedcover" target="_new"><img src="<?php echo base_url();?>images/fb_small.png" alt="CGI"></a>
				</div>
				<div class="clear"></div>
			</div>
			<div class="socmedrow" style="color:#54A5D6">
				<?php echo $words['twitter']; ?>
				<div class="socmedicon">
					<a class="twitter-button addthis_button_twitter_follow" addthis:userid="cgi_homebed"></a>
					<a style="margin-left:5px;" class="twitter-button addthis_button_tweet"></a>
				</div>
			</div>
			<div class="socmedrow" style="color:#67b0b7">
				<?php echo $words['share']; ?>
				<div class="socmedicon">
				<!-- AddThis Button BEGIN -->
					<a class="addthis_button" href="http://www.addthis.com/bookmark.php?v=300&amp;pubid=ra-5257c1067aa9e4e7"><img src="http://s7.addthis.com/static/btn/v2/lg-share-en.gif" width="125" height="16" alt="Bookmark and Share" style="border:0;margin-left:5px;"/></a>
					<script type="text/javascript">var addthis_config = {"data_track_addressbar":false};</script>
					<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5257c1067aa9e4e7"></script>
				<!-- AddThis Button END -->
				</div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
</div>
<div id="footer">
	<div id="footer-link">		
		<ul>
		<?php 			
			foreach($footer['menu_footer'] as $footer_link)
			{
				echo "<li><a href='".$this->config->site_url()."/".$footer_link['link']."'>".$footer_link['text']."</a></li>";
			}
		?>
		</ul>
		<div class="clear"></div>
		<div id="cpright">
			&copy; CGI 2013
		</div>
	</div>
</div>
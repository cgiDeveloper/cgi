<?php
//call the template library
	$ci = & get_instance();
	$ci->load->library('template');
	$footer = $ci->template->set_template('footer');
?>
<div id="footer">
	<div id="footer-link">		
		<ul>
		<?php 			
			foreach($footer as $footer_link)
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
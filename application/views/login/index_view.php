<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head><title></title></head>
<link rel="stylesheet" href="<?php echo base_url();?>css/style.css" type="text/css"></link>
<link rel="stylesheet" href="<?php echo base_url();?>css/login.css" type="text/css"></link>
<body>
	<?php $this->load->view('header');?>
	<div id="login-wrapper">
		<div id="login-form">
			<div class="top-title">
				<h3>Reseller Login</h3>
			</div>
			<div id="login-box">
			<?php echo form_open('login/check_login');?>
				<div id="form-row1">
					<?php echo form_label('Email', 'inputemail');?>
					<?php
						$emailform = array('name'=>'inputemail', 'id'=>'inputemail');
						$passwordform = array('name'=>'inputpassword', 'id'=>'inputpassword');
					?>
					<div class="input-text">
						<?php echo form_input($emailform);?>
					</div>
					<div class="clear"></div>
				</div>
				<div id="form-row2">
					<?php echo form_label('Password', 'inputpassword');?>
					<div class="input-text">
						<?php echo form_input($passwordform);?>
					</div>
					<div class="clear"></div>
				</div>
				<div id="form-row3">
					<div id="submit-btn-wrap" class="input-text">
						<?php 
							echo form_close();
							echo form_submit(array('id'=>'submit-btn','value'=>'Login'));
						?>
					</div>
				</div>
			<?php ?>
			</div>
			<div id="forgotpassword" class="top-title">
				<a href="<?php echo $this->config->site_url();?>/login/requestpassword" style="font-size:11px;text-decoration:none;color:#44a20b;">Lupa password?</a>
			</div>
		</div>
		<div id="register-form">
			<div class="top-title">
				<h3>Register Reseller</h3>
			</div>
			<div id="register-box-wrap">				
				<p>
					Daftarlah menjadi reseller CGI untuk mendownload katalog secara gratis dan menikmati keseluruhan fitur di web kami!
				</p>
				<a href="<?php echo $this->config->site_url();?>/register">Register</a>
			</div>
		</div>
		<div class="clear">
		</div>
	</div>
	<?php $this->load->view('footer');?>
</body>
</html>
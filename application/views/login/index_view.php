<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head><title></title></head>
<link rel="stylesheet" href="<?php echo base_url();?>css/style.css" type="text/css"></link>
<link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css" type="text/css"></link>
<link rel="stylesheet" href="<?php echo base_url();?>css/login.css" type="text/css"></link>
<body>
	<?php $this->load->view('/templates/header');?>
	<div id="login-wrapper">
		<div id="login-form">
			<div class="top-title">
				<h3>Reseller Login</h3>
				<?php
				if($this->session->flashdata('err_message'))
       			 	echo "<div class='alert alert-error'>".$this->session->flashdata('err_message')."</div>";
       			 ?>
			</div>
			<div id="login-box">
			<?php echo form_open('member_pages/check_login');?>
				<div id="form-row1">
					<?php
						$label_att = array('class'=>'label_login') ;
						echo form_label('Email', 'inputemail', $label_att);
						$emailform = array('name'=>'inputemail', 'id'=>'inputemail');
						$passwordform = array('name'=>'inputpassword', 'id'=>'inputpassword', 'type'=>'password');
					?>
					<div class="input-text">
						<?php echo form_input($emailform);?>
					</div>
					<div class="clear"></div>
				</div>
				<div id="form-row2">
					<?php echo form_label('Password', 'inputpassword', $label_att);?>
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
				<a href="<?php echo $this->config->site_url();?>/pages/forget_password" style="font-size:11px;text-decoration:none;color:#44a20b;"><?php echo $question;?></a>
			</div>
		</div>
		<div id="register-form">
			<div class="top-title">
				<h3>Register Reseller</h3>
			</div>
			<div id="register-box-wrap">				
				<p>
					<?php echo $reseller_msg; ?>
				</p>
				<a href="<?php echo $this->config->site_url();?>/pages/sign_up">Register</a>
			</div>
		</div>
		<div class="clear">
		</div>
	</div>
	<?php $this->load->view('/templates/footer');?>
</body>
</html>
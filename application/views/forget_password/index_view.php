<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head><title></title></head>
<link rel="stylesheet" href="<?php echo base_url();?>css/style.css" type="text/css"></link>
<link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css" type="text/css"></link>
<link rel="stylesheet" href="<?php echo base_url();?>css/login.css" type="text/css"></link>
<style type="text/css">
	.input-text
	{
		float:left;
		margin-left: 20px;
	}
</style>
<body>
	<?php $this->load->view('/templates/header');?>
	<div id="login-wrapper">
		<div id="login-form" style="width:1000px;height:250px;">
			<div class="top-title" style="width:900px;">
				<h5><?php echo $question;?></h5>
				 <?php 
      				if($this->session->flashdata('err_forget_pass'))
        				echo "<div class='alert alert-error'>".$this->session->flashdata('err_forget_pass')."</div>";
        			else if($this->session->flashdata('succ_forget_pass'))
        				echo "<div class='alert alert-success'>".$this->session->flashdata('succ_forget_pass')."</div>";
        		?>
			</div>
			<div id="login-box" style="width:900px;border:0px;">
			<?php echo form_open('member_pages/forget_password');?>
				<div id="form-row1">
					<?php
						$label_att = array('class'=>'label_login') ;
						echo form_label('Email', 'inputemail', $label_att);
						$emailform = array('name'=>'inputemail', 'id'=>'inputemail');
					?>
					<div class="input-text">
						<?php echo form_input($emailform);?>
					</div>
					<div class="clear"></div>
				</div>
				<div id="form-row3">
					<div id="submit-btn-wrap" class="input-text" style="margin-left:55px;">
						<?php 
							echo form_close();
							echo form_submit(array('id'=>'submit-btn','value'=>'Reset'));
						?>
					</div>
				</div>
			</div>
		</div>
		<div class="clear">
		</div>
	</div>
	<?php $this->load->view('/templates/footer');?>
</body>
</html>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head><title></title></head>
<link rel="stylesheet" href="<?php echo base_url();?>css/style.css" type="text/css"></link>
<link rel="stylesheet" href="<?php echo base_url();?>css/sign_up.css" type="text/css"></link>
<link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css" type="text/css"></link>
<link rel="stylesheet" href="<?php echo base_url();?>css/page-content.css" type="text/css"></link>
<script src="<?php echo base_url();?>js/jquery.js"></script>
<body>
	<?php $this->load->view('/templates/header');?>
	<div id="sign_up_wrapper">
		<h1 id="signup-title"><?php echo $title_page;?></h1>
		<?php
			$input_email = array('name'=>'email','id'=>'email',);
			$input_password = array('name'=>'password','id'=>'password',);
			$input_first_name = array('name'=>'first_name','id'=>'first_name',);
			$input_last_name = array('name'=>'last_name','id'=>'last_name',);
			$input_first_name_user = array('name'=>'first_name_user','id'=>'first_name_user',);
			$input_last_name_user = array('name'=>'last_name_user','id'=>'last_name_user',);
			$input_address = array('name'=>'address','id'=>'address','class'=>'textarea-add',);
			$input_dest_address = array('name'=>'dest_address','id'=>'dest_address','class'=>'textarea-add',);
			$input_phone = array('name'=>'phone','id'=>'phone',);
			$input_phone_user = array('name'=>'phone_user','id'=>'phone_user',);
			$input_pin = array('name'=>'pin','id'=>'pin',);
			$input_website = array('name'=>'website','id'=>'website',);
			$input_omzet = array('name'=>'omzet','id'=>'omzet',);
			$input_employee = array('name'=>'employee','id'=>'employee',);
			$input_store = array('name'=>'store','id'=>'store',);
			$input_store_user = array('name'=>'store_user','id'=>'store_user',);
			$input_nation = array();
			$input_region = array();
			$input_questionaire = array();
			foreach($nations as $nation)
				array_push($input_nation[$nation['id']]=$nation['nation_name']);
			foreach($regions as $region)
				array_push($input_region[$region['id']]=$region['region_name']);
			echo form_open('user/registration');
		?>
		<div class="data-form">
		<?php
			echo "<label class='label-membertype'><input id='reseller' type='radio' name='membertype' value='reseller' style='margin:0px;' checked>Reseller</label>";
			echo "<label class='label-membertype'><input id='member' type='radio' name='membertype' style='margin:0px 0px 0px 30px;'value='member'>Member</label>";
		?>
		</div>
		<div id="reseller-data" class="data-form">
			<fieldset id="fieldset-user" class="fieldset-signup">
				<legend><?php echo $legend3;?></legend>
				<div class="label-signup">
					<?php echo "<span class='important'>*</span>".form_label($first_name, 'first_name_user');?>
				</div>
				<div class="label-signup">
					<?php echo form_input($input_first_name_user);?>
				</div>
				<div class="clear"></div>
				<div class="label-signup">
					<?php echo "<span class='important'>*</span>".form_label($last_name, 'last_name_user');?>
				</div>
				<div class="label-signup">
					<?php echo form_input($input_last_name_user);?>
				</div>
				<div class="clear"></div>
				<div class="label-signup">
					<?php echo form_label($phone, 'phone_user');?>
				</div>
				<div class="label-signup">
					<?php echo form_input($input_phone_user);?>
				</div>
				<div class="clear"></div>
				<div class="label-signup">
					<?php echo form_label($store_name, 'store_user');?>
				</div>
				<div class="label-signup">
					<?php echo form_input($input_store_user);?>
				</div>
				<div class="clear"></div>
				
			</fieldset>
			<fieldset id="fieldset-company" class="fieldset-signup">
				<legend><?php echo $legend1;?></legend>
				<div class="label-signup">
					<?php echo "<span class='important'>*</span>".form_label($first_name, 'first_name');?>
				</div>
				<div class="input-signup label-signup">
					<?php echo form_input($input_first_name);?>
				</div>
				<div class="clear"></div>
				<div class="label-signup">
					<?php echo "<span class='important'>*</span>".form_label($last_name, 'last_name');?>
				</div>
				<div class="input-signup label-signup">
					<?php echo form_input($input_last_name);?>
				</div>
				<div class="clear"></div>
				<div class="label-signup">
					<?php echo "<span class='important'>*</span>".form_label($phone, 'phone');?>
				</div>
				<div class="input-signup label-signup">
					<?php echo form_input($input_phone);?>
				</div>
				<div class="clear"></div>
				<div class="label-signup">
					<?php echo form_label($pin_bb, 'pin');?>
				</div>
				<div class="input-signup label-signup">
					<?php echo form_input($input_pin);?>
				</div>
				<div class="clear"></div>
				<div class="label-signup">
					<?php echo "<span class='important'>*</span>".form_label($store_name, 'store');?>
				</div>
				<div class="input-signup label-signup">
					<?php echo form_input($input_store);?>
				</div>
				<div class="clear"></div>
				<div class="label-signup">
					<?php echo form_label($website, 'website');?>
				</div>
				<div class="input-signup label-signup">
					<?php echo form_input($input_website);?>
				</div>
				<div class="clear"></div>
				<div class="label-signup">
					<?php echo form_label($total_employee, 'employee');?>
				</div>
				<div class="input-signup label-signup">
					<?php echo form_input($input_employee);?>
				</div>
				<div class="clear"></div>
				<div class="label-signup">
					<?php echo "<span class='important'>*</span>".form_label($omzet, 'omzet');?>
				</div>
				<div class="input-signup label-signup">
					<?php echo form_input($input_omzet);?>
				</div>
				<div class="clear"></div>
				<div class="label-signup">
					<?php echo "<span class='important'>*</span>".form_label($nation_name, 'nation');?>
				</div>
				<div class="input-signup label-signup">
					<?php echo form_dropdown('nation', $input_nation, 'Indonesia', 'id = select-nation');?>
				</div>
				<div class="clear"></div>
				<div class="label-signup">
					<?php echo "<span class='important'>*</span>".form_label($region_name, 'region');?>
				</div>
				<div class="input-signup label-signup">
					<?php echo form_dropdown('region', $input_region, 'Jakarta', 'id=select-region');?>
				</div>
				<div class="clear"></div>
				<div class="label-signup">
					<?php echo "<span class='important'>*</span>".form_label($address, 'address');?>
				</div>
				<div class="input-signup label-signup">
					<?php echo form_textarea($input_address);?>
				</div>
				<div class="clear"></div>
				<div class="label-signup">
					<?php echo "<span class='important'>*</span>".form_label($destination_address, 'dest_address');?>
				</div>
				<div class="input-signup label-signup">
					<?php echo form_textarea($input_dest_address);?>
				</div>
				<div class="clear"></div>
				<div class="label-signup">
					<?php echo form_label($member_items, 'member_items');?>
				</div>
				<div class="input-signup label-signup">
					<?php 
						foreach($category_product as $category)
							echo "<input type='checkbox' name='member_items' value='".$category['id']."'>".$category['category_name'].".<br>";
					?>
				</div>
				<div class="clear"></div>
				<div class="label-signup">
					<?php echo form_label($member_interests, 'member_interests');?>
				</div>
				<div class="input-signup label-signup">
					<?php 
					foreach($category_product as $category)
							echo "<input type='checkbox' name='member_interests' value='".$category['id']."'>".$category['category_name'].".<br>";
					?>
				</div>
				<div class="clear"></div>
				<div class="label-signup">
					<?php echo form_label($questionaire, 'questionaire');?>
				</div>
				<div class="input-signup label-signup">
					<?php
						foreach($media as $media_list)
							echo "<input type='checkbox' name='media' value='".$media_list['id']."'>".$media_list['media_name'].".<br>";
					?>
				</div>
				<div class="clear"></div>
			</fieldset>
			<fieldset class="fieldset-signup">
				<legend><?php echo $legend2;?></legend>
				<div class="label-signup">
					<?php echo "<span class='important'>*</span>".form_label($email, 'email')?>
				</div>
				<div class="input-signup label-signup">
					<?php echo form_input($input_email);?>
				</div>
				<div class="clear"></div>
				<div class="label-signup">
					<?php echo "<span class='important'>*</span>".form_label('Password', 'email');?>
				</div>
				<div class="input-signup label-signup">
					<?php echo form_input($input_password);?>
				</div>
				<div class="clear"></div>
				<div class="label-signup">
					&nbsp;
				</div>
				<div class="input-signup label-signup">
					<?php echo form_submit('submit', $register, 'class=btn btn-primary');?>
				</div>
				<div class="clear"></div>
			</fieldset>
		</div>
		<?php form_close();?>
	</div>
	<?php $this->load->view('/templates/footer');?>
	<script type="text/javascript">
		$(function(){
			$("#fieldset-user").hide();
			$("#reseller").click(function(){
				$("#fieldset-user").hide();
				$("#fieldset-company").show();
			});
			$("#member").click(function(){
				$("#fieldset-company").hide();
				$("#fieldset-user").show();
			});
		});
	</script>
</body>
</html>
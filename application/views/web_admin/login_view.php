<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Le styles -->
    <link href = "<?php echo $this->config->base_url();?>css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }
      .alert{
        margin-bottom: 10px;
      }
    </style>
    <link href="<?php echo $this->config->base_url();?>/css/bootstrap-responsive.min.css" rel="stylesheet">
  </head>
  <body>

    <div class="container">
		<?php
			$form_att = array("class"=>"form-signin");
			$text_att = array("class"=>"input-block-level", "placeholder"=>"Username", "id"=>"username", "name"=>"username");
			$pass_att = array("type"=>"password", "class"=>"input-block-level", "placeholder"=>"Password", "id"=>"password", "name"=>"password");
		?>
      <?php echo form_open('web_admin/check',$form_att);?>
        <h2 class="form-signin-heading">sign in</h2>
        <?php 
      if($this->session->flashdata('err_user'))
        echo "<div class='alert alert-error'>".$this->session->flashdata('err_user')."</div>";
			echo form_input($text_att);
			echo form_input($pass_att);
		?>
        <button class="btn btn-large btn-primary" type="submit">Sign in</button>
      <?php form_close();?>

    </div> <!-- /container -->
  </body>
</html>

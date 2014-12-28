<?php echo (isset($revolution_slider)) ? $revolution_slider : ''; ?>
<div class="row">
<div class="col-md-4"></div>
	<div class="col-md-4">
		<div class="panel panel-primary">
			<div class="panel-heading">USER LOGIN</div>
			<div class="panel-body">
			<?php echo validation_errors("<p style='color: red;'>","</p>"); ?>
			<?php echo form_open(site_url('users/submit'),array('class'=>"well form-inline"));?>
			<p><?php echo form_input(array('name' => 'username', 'class'=>"form-control", 'placeholder' => "Username"));?></p>
			<p><?php echo form_password(array('name'=> 'password', 'class'=>"form-control", 'placeholder' => "Password"))?></p>
			<button type="submit" name="login" class="btn blue">Login</button>  
			<?php echo form_close()?>
			</div>
		</div>
	</div>
</div>
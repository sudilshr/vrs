<!DOCTYPE html>
<head>
	<meta charset="utf-8" />
	<title>VRS - Admin Login</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<meta name="MobileOptimized" content="320">
        
 
   
	<!-- BEGIN GLOBAL MANDATORY STYLES -->          
	<link href="<?php echo base_url()?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url()?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN THEME STYLES --> 
	<link href="<?php echo base_url()?>assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url()?>assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>		
	<link href="<?php echo base_url()?>assets/css/pages/login.css" rel="stylesheet" type="text/css"/>
	
	<!-- END THEME STYLES -->

</head>
<!-- BEGIN BODY -->
<body class="login">
	<!-- BEGIN LOGO -->
	<div class="logo">
            <a href="<?php echo base_url();?>">
		<img src="<?php echo base_url()?>assets/img/logo_admin.png" alt="VRS" /> 
            </a>
	</div>
	<!-- END LOGO -->
	<!-- BEGIN LOGIN -->
	<div class="content">
		<!-- BEGIN LOGIN FORM -->
		<form class="login-form" action="<?php echo base_url()?>dashboard/users/submit" method="post">
			<h3 class="form-title">Admin Login</h3>
			<div class="alert alert-error hide">
				<button class="close" data-dismiss="alert"></button>
				<span>Enter any username and password.</span>
			</div>
			<div class="form-group">
				
				<label class="control-label visible-ie8 visible-ie9">Username</label>
				<div class="input-icon">
					<i class="icon-user"></i>
					<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username" value="admin"/>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label visible-ie8 visible-ie9">Password</label>
				<div class="input-icon">
					<i class="icon-lock"></i>
					<input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password"value="admin"/>
				</div>
			</div>
			<div class="form-actions">
                                <label></label>
				<button type="submit" class="btn green pull-right">
				Login <i class="m-icon-swapright m-icon-white"></i>
				</button>            
			</div>

			<div class="">
				<p>
                                        <br />
					Username: <b>admin</b> <br />
                                        Password: <b>admin</b>
				</p>
			</div>
		</form>
		<!-- END LOGIN FORM -->        
		
		
	</div>
	<!-- END LOGIN -->


</body>
<!-- END BODY -->
</html>
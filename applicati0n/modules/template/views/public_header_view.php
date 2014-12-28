<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->

<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->

<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>VRS <?php if (isset($title)) echo " | ".$title; ?></title>
    <meta name="description" content="<?php //echo $page['description']?>">
    <meta name="keywords" content="<?php //echo $page['keywords']?>">
    <meta name="author" content="<?php //echo $page['author']?>">

    
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

   <!-- BEGIN GLOBAL MANDATORY STYLES -->          
   <link href="<?php echo base_url()?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo base_url()?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
   <!-- END GLOBAL MANDATORY STYLES -->

   <!-- BEGIN PAGE LEVEL PLUGIN STYLES --> 
   <link href="<?php echo base_url()?>assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" />              
   <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/revolution_slider/css/rs-style.css" media="screen">
   <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/revolution_slider/rs-plugin/css/settings.css" media="screen"> 
   <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/bxslider/jquery.bxslider.css"  />  
   <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/bootstrap-datetimepicker/css/datetimepicker.css"   type="text/css"/>
   <!-- END PAGE LEVEL PLUGIN STYLES -->


   <!-- BEGIN THEME STYLES --> 
   <link href="<?php echo base_url()?>assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo base_url()?>assets/css/themes/blue.css" rel="stylesheet" type="text/css" id="style_color"/>
   <link href="<?php echo base_url()?>assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo base_url()?>assets/css/custom.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo base_url()?>assets/admin/css/plugins.css" rel="stylesheet" type="text/css"/>
   
   <link href="<?php echo base_url()?>assets/css/pages/prices.css" rel="stylesheet" type="text/css"/>

   <!-- END THEME STYLES -->
   
  
   
   


   <link rel="shortcut icon" href="<?php echo base_url()?>assets/favicon.ico" />

</head>
<!-- END HEAD -->


<!-- BEGIN BODY -->
<body>
<div class="header navbar navbar-default navbar-static-top">
        
        <!-- BEGIN TOP BAR -->
        <!--
        <div class="front-topbar">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6">

                    </div>
                    
                    <div class="col-md-6 col-sm-6 topbar-social">
                        <ul class="list-unstyled inline">
                            <li>Logged in as <a href="#"><i class="icon-user"></i>User</a></li>

                        </ul>
                    </div>
                </div>
            </div>        
        </div>
        -->
        <!-- END TOP BAR -->
        
        
		<div class="container">
			<div class="navbar-header">
				<!-- BEGIN RESPONSIVE MENU TOGGLER -->
				<button class="navbar-toggle btn navbar-btn" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!-- END RESPONSIVE MENU TOGGLER -->

				<!-- BEGIN LOGO (you can use logo image instead of text)-->
				<a class="navbar-brand logo-v1" href="<?php echo base_url()?>">
					<img src="<?php echo base_url()?>assets/img/logo.png" id="logoimg" alt="VRS">
				</a>
				<!-- END LOGO -->
			</div>

			<!-- BEGIN TOP NAVIGATION MENU -->
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li <?php if($active_menu=='home') echo 'class="active"';?>><a href="<?php echo base_url()?>">Home</a></li>     
                                        <li <?php if($active_menu=='reservation') echo 'class="active"';?>><a href="<?php echo base_url()?>reservation">Reservation/Quote</a></li>  
					<li <?php if($active_menu=='vehicles') echo 'class="active"';?>><a href="<?php echo base_url()?>vehicle">Vehicles</a></li> 
                                        <li><a href="<?php echo base_url()?>dashboard">Admin</a></li>
				</ul>                           
			</div>
			<!-- BEGIN TOP NAVIGATION MENU -->

		</div>
    </div>
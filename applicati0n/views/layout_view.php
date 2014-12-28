<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->

<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->

<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
	<?php echo (isset($meta_view)) ? $meta_view : ''; ?>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

   <!-- BEGIN GLOBAL MANDATORY STYLES -->          
   <link href="<?php echo base_url()?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo base_url()?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
   <!-- END GLOBAL MANDATORY STYLES -->

   <!-- BEGIN PAGE LEVEL PLUGIN STYLES --> 
   <link href="<?php echo base_url()?>assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" />              
   <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/revolution_slider/css/rs-style.css" media="screen">
   <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/revolution_slider/rs-plugin/css/settings.css" media="screen"> 
   <link href="<?php echo base_url()?>assets/plugins/bxslider/jquery.bxslider.css" rel="stylesheet" />                            
   <!-- END PAGE LEVEL PLUGIN STYLES -->


   <!-- BEGIN THEME STYLES --> 
   <link href="<?php echo base_url()?>assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo base_url()?>assets/css/themes/blue.css" rel="stylesheet" type="text/css" id="style_color"/>
   <link href="<?php echo base_url()?>assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo base_url()?>assets/css/custom.css" rel="stylesheet" type="text/css"/>
   <!-- END THEME STYLES -->

   <link rel="shortcut icon" href="<?php echo base_url()?>assets/favicon.ico" />

</head>
<!-- END HEAD -->


<!-- BEGIN BODY -->
<body>

    <!-- BEGIN HEADER -->
	<?php echo (isset($header_view)) ? $header_view : ''; ?>
    <!-- END HEADER -->

<!--start_nav-->
	<?php echo (isset($top_menu_view)) ? $top_menu_view : ''; ?>
<!--end_nav-->

    <!-- BEGIN PAGE CONTAINER -->  
    <div class="page-container">
	<?php echo (isset($revolution_view)) ? $revolution_view : ''; ?>

        <!-- BEGIN CONTAINER -->   

        <div class="container">
        
            <div class="clearfix"></div>

			<?php echo $this->error->error_view()?>			
			<?php echo (isset($tab_view)) ? $tab_view : ''; ?>
			<?php echo (isset($content_for_layout)) ? $content_for_layout : ''; ?>

        </div>

        <!-- END CONTAINER -->
		


    <!-- BEGIN FOOTER -->
	<?php echo (isset($footer_view)) ? $footer_view : ''; ?>
    <!-- END FOOTER -->

    <!-- Load javascripts at bottom, this will reduce page load time -->

    <!-- BEGIN CORE PLUGINS(REQUIRED FOR ALL PAGES) -->

    <!--[if lt IE 9]>

    <script src="assets/plugins/respond.min.js"></script>  

    <![endif]-->  
    <script src="assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>      
    <script type="text/javascript" src="assets/plugins/hover-dropdown.js"></script>
    <script type="text/javascript" src="assets/plugins/back-to-top.js"></script>    
    <!-- END CORE PLUGINS -->



    <!-- BEGIN PAGE LEVEL JAVASCRIPTS(REQUIRED ONLY FOR CURRENT PAGE) -->
    <script type="text/javascript" src="assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>  
    <script type="text/javascript" src="assets/plugins/revolution_slider/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="assets/plugins/revolution_slider/rs-plugin/js/jquery.themepunch.revolution.min.js"></script> 
    <script type="text/javascript" src="assets/plugins/bxslider/jquery.bxslider.min.js"></script>
    <script src="assets/scripts/app.js"></script>
    <script src="assets/scripts/index.js"></script>    
    <script type="text/javascript">
        jQuery(document).ready(function() {
            App.init();    
            App.initBxSlider();
            Index.initRevolutionSlider();                    
        });

    </script>

    <!-- END PAGE LEVEL JAVASCRIPTS -->

	
</body>

<!-- END BODY -->

</html>
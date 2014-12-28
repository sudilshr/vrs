<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

<!-- BEGIN HEAD -->
<head>
<title>VRS | Admin Dashboard</title>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />
   <meta name="MobileOptimized" content="320">

   <!-- BEGIN GLOBAL MANDATORY STYLES -->          
   <link href="<?php echo base_url()?>assets/admin/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo base_url()?>assets/admin/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo base_url()?>assets/admin/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
   <!-- END GLOBAL MANDATORY STYLES -->

   <!-- BEGIN PAGE LEVEL PLUGIN STYLES --> 
   <link href="<?php echo base_url()?>assets/admin/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo base_url()?>assets/admin/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
   <link href="<?php echo base_url()?>assets/admin/plugins/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo base_url()?>assets/admin/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo base_url()?>assets/admin/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo base_url()?>assets/plugins/bootstrap-datetimepicker/css/datetimepicker.css"  rel="stylesheet" type="text/css"/>

   <!-- END PAGE LEVEL PLUGIN STYLES -->

   <!-- BEGIN THEME STYLES --> 
   <link href="<?php echo base_url()?>assets/admin/css/style-metronic.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo base_url()?>assets/admin/css/style.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo base_url()?>assets/admin/css/style-responsive.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo base_url()?>assets/admin/css/plugins.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo base_url()?>assets/admin/css/pages/tasks.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo base_url()?>assets/admin/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
   <link href="<?php echo base_url()?>assets/admin/css/custom.css" rel="stylesheet" type="text/css"/>
   <!-- END THEME STYLES -->
   <link rel="shortcut icon" href="favicon.ico" />

</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->
<body class="page-header-fixed">
   <!-- BEGIN HEADER -->   
   <div class="header navbar navbar-inverse navbar-fixed-top">
      <!-- BEGIN TOP NAVIGATION BAR -->
      <div class="header-inner">
         <!-- BEGIN LOGO -->  
         <a class="navbar-brand" href="<?php echo base_url().'dashboard';?>">
         
         <img src="<?php echo base_url()?>assets/admin/img/logo.png" alt="VRS" class="img-responsive" />
        
         </a>
         <!-- END LOGO -->
         <!-- BEGIN RESPONSIVE MENU TOGGLER --> 
         <a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
         <img src="<?php echo base_url()?>assets/admin/img/menu-toggler.png" alt="" />
         </a> 
         <!-- END RESPONSIVE MENU TOGGLER -->
		 
         <!-- BEGIN TOP NAVIGATION MENU -->
         <ul class="nav navbar-nav pull-right">
	
             <!-- BEGIN USER LOGIN DROPDOWN -->
            <li class="dropdown user">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
               <i class="icon-user"></i>
               <span class="username"><?php echo $username; ?></span>
               <i class="icon-angle-down"></i>
               </a>
               <ul class="dropdown-menu">
                  <li><a href="<?php echo base_url()?>"><i class="icon-home"></i> Home Site</a>
                  <li><a href="<?php echo base_url().'dashboard/users/logout'?>"><i class="icon-key"></i> Log Out</a>
                  </li>
               </ul>
            </li>
            <!-- END USER LOGIN DROPDOWN -->
				
         </ul>
         <!-- END TOP NAVIGATION MENU -->
      </div>
      <!-- END TOP NAVIGATION BAR -->
   </div>
   <!-- END HEADER -->
   <div class="clearfix"></div>
   <!-- BEGIN CONTAINER -->
   <div class="page-container">
      <!-- BEGIN SIDEBAR -->
      <div class="page-sidebar navbar-collapse collapse">       
         <ul class="page-sidebar-menu">
               <!-- BEGIN NAVIGATION MENU -->
               <?php include('admin_navigation_menu.php');//echo (isset($navigation_menu)) ? $navigation_menu : ''; ?>
               <!-- END NAVIGATION MENU -->   
      </div>
      <!-- END SIDEBAR -->
      
      <!-- BEGIN PAGE -->
      <div class="page-content">
         
               
         <!-- BEGIN PAGE HEADER-->
         <div class="row">
            <div class="col-md-12">
               <!-- BEGIN PAGE TITLE & BREADCRUMB-->
               <?php 
               if ($this->uri->segment(2)==''){
                  echo '<h3 class="page-title">Dashboard <small>statistics and more</small></h3>'; 
               } else {
                   echo '<h3 class="page-title">'.ucfirst($this->uri->segment(2)).'</h3>'; 
               }
               ?>
               
               <ul class="page-breadcrumb breadcrumb">
                  <li>
                     <i class="icon-home"></i>
                     <a href="<?php echo base_url(); ?>">Home</a> 
                     <i class="icon-angle-right"></i>
                  </li>
                  <li><a href="<?php echo base_url(); ?>dashboard">Dashboard</a>
                  <?php
                  $plink1 = $this->uri->segment(2);
                  $plink2 = $this->uri->segment(3);
                  if ($plink1 != ""){
                      
                      $plink1_href=base_url().'dashboard/'.$plink1;
                      echo '<i class="icon-angle-right"></i></li><li><a href="'.$plink1_href.'">'.ucfirst($plink1).'</a>';
                  }
                  if ($plink2 !=""){

                      $plink2_href=base_url().'dashboard/'.$plink1.'/'.$plink2;

                      echo '<i class="icon-angle-right"></i></li><li><a href="'.$plink2_href.'">'.ucfirst($plink2).'</a></li>';
                  }
                  
                  ?>
                  
                  <li class="pull-right">
                     <div id="dashboard-report-range" class="dashboard-date-range tooltips" data-placement="top" data-original-title="Change dashboard date range">
                        <i class="icon-calendar"></i>
                        <span></span>
                        <i class="icon-angle-down"></i>
                     </div>
                  </li>
                                    
               </ul>
               <!-- END PAGE TITLE & BREADCRUMB-->
            </div>
         </div>
         <!-- END PAGE HEADER-->

         <div class="clearfix"></div>
         <div class="row">
            
            <div class="col-md-12">
               <?php
                //Content Here 
                if(!isset($view_file)) { 
                        $view_file=""; 
                }
                if(!isset($module)) { 
                        $module=$this->uri->segment(1); 
                }


                if (($view_file!="") && ($module!="")) {
                        $path = $module."/".$view_file;
                        $this->load->view($path);
                }

                ?>
            </div>
         </div>
      </div>
      <!-- END PAGE -->
   </div>
   <!-- END CONTAINER -->

   <!-- BEGIN FOOTER -->
   <div class="footer">
      <div class="footer-inner">
         2014 &copy; VRS.
      </div>
      <div class="footer-tools">
         <span class="go-top">
         <i class="icon-angle-up"></i>
         </span>
      </div>
   </div>
   <!-- END FOOTER -->

   <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
   <!-- BEGIN CORE PLUGINS -->   
   <!--[if lt IE 9]>
   <script src="<?php echo base_url()?>assets/admin/plugins/respond.min.js"></script>
   <script src="<?php echo base_url()?>assets/admin/plugins/excanvas.min.js"></script> 
   <![endif]-->   
   <script src="<?php echo base_url()?>assets/admin/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
   <script src="<?php echo base_url()?>assets/admin/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>   
   <!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
   <script src="<?php echo base_url()?>assets/admin/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
   <script src="<?php echo base_url()?>assets/admin/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
   <script src="<?php echo base_url()?>assets/admin/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript" ></script>
   <script src="<?php echo base_url()?>assets/admin/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
   <script src="<?php echo base_url()?>assets/admin/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
   <script src="<?php echo base_url()?>assets/admin/plugins/jquery.cookie.min.js" type="text/javascript"></script>
   <script src="<?php echo base_url()?>assets/admin/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
   <!-- END CORE PLUGINS -->
   <!-- BEGIN PAGE LEVEL PLUGINS -->
   <script src="<?php echo base_url()?>assets/admin/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>   
   <script src="<?php echo base_url()?>assets/admin/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
   <script src="<?php echo base_url()?>assets/admin/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
   <script src="<?php echo base_url()?>assets/admin/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
   <script src="<?php echo base_url()?>assets/admin/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
   <script src="<?php echo base_url()?>assets/admin/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
   <script src="<?php echo base_url()?>assets/admin/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>  
   <script src="<?php echo base_url()?>assets/admin/plugins/flot/jquery.flot.js" type="text/javascript"></script>
   <script src="<?php echo base_url()?>assets/admin/plugins/flot/jquery.flot.resize.js" type="text/javascript"></script>
   <script src="<?php echo base_url()?>assets/admin/plugins/jquery.pulsate.min.js" type="text/javascript"></script>
   <script src="<?php echo base_url()?>assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js" type="text/javascript"></script>     
   <script src="<?php echo base_url()?>assets/admin/plugins/gritter/js/jquery.gritter.js" type="text/javascript"></script>  
   <!-- END PAGE LEVEL PLUGINS -->
   <!-- BEGIN PAGE LEVEL SCRIPTS -->
   <script src="<?php echo base_url()?>assets/admin/scripts/app.js" type="text/javascript"></script>
   <script src="<?php echo base_url()?>assets/admin/scripts/index.js" type="text/javascript"></script>
   <script src="<?php echo base_url()?>assets/admin/scripts/tasks.js" type="text/javascript"></script>        
   <!-- END PAGE LEVEL SCRIPTS -->  
   <script>
   jQuery(document).ready(function() {    
        App.init(); // initlayout and core plugins
        Index.init();

		 
	// Fade Out alert message
	$('.alert').delay(5000).slideUp('slow'); 
        
        //datetime picker
        $(".form_datetime").datetimepicker({
            autoclose: true,
            isRTL: App.isRTL(),
            format: "dd MM yyyy - hh:ii",
            pickerPosition: (App.isRTL() ? "bottom-right" : "bottom-left")
         });
    });
      
     
   
    
   </script>
   <!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html
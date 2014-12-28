<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.0
Version: 1.5.2
Author: KeenThemes
Website: http://www.keenthemes.com/
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

<!-- BEGIN HEAD -->
<head>
<title>VRS | Admin Dashboard</title>
<?php echo (isset($head_meta_view)) ? $head_meta_view : ''; ?>
</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->
<body class="page-header-fixed">
   <!-- BEGIN HEADER -->   
   <div class="header navbar navbar-inverse navbar-fixed-top">
      <!-- BEGIN TOP NAVIGATION BAR -->
      <div class="header-inner">
         <!-- BEGIN LOGO -->  
         <a class="navbar-brand" href="index.html">
         <img src="<?php echo base_url()?>assets/admin/img/logo.png" alt="logo" class="img-responsive" />
         </a>
         <!-- END LOGO -->
         <!-- BEGIN RESPONSIVE MENU TOGGLER --> 
         <a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
         <img src="<?php echo base_url()?>assets/admin/img/menu-toggler.png" alt="" />
         </a> 
         <!-- END RESPONSIVE MENU TOGGLER -->
		 
         <!-- BEGIN TOP NAVIGATION MENU -->
         <ul class="nav navbar-nav pull-right">

            <!-- BEGIN HEADER DROPDOWN -->		 
            <?php echo (isset($header_dropdown)) ? $header_dropdown : ''; ?>
            <!-- END HEADER DROPDOWN -->

			
            <!-- BEGIN USER LOGIN DROPDOWN -->
			<?php echo (isset($user_login_dropdown_view)) ? $user_login_dropdown_view : ''; ?>
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
         <!-- BEGIN SIDEBAR MENU -->        
         <ul class="page-sidebar-menu">
            <li>
               <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
               <div class="sidebar-toggler hidden-phone"></div>
               <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            </li>
            <li>
               <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
               <?php echo (isset($responsive_quick_search_form)) ? $responsive_quick_search_form : ''; ?>
               
               <!-- END RESPONSIVE QUICK SEARCH FORM -->
            </li>
               <!-- BEGIN NAVIGATION MENU -->
               <?php echo (isset($navigation_menu)) ? $navigation_menu : ''; ?>
               <!-- END NAVIGATION MENU -->   
         <!-- END SIDEBAR MENU -->
      </div>
      <!-- END SIDEBAR -->
      <!-- BEGIN PAGE -->
      <div class="page-content">
         <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->               
         <div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                     <h4 class="modal-title">Modal title</h4>
                  </div>
                  <div class="modal-body">
                     Widget settings form goes here
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn blue">Save changes</button>
                     <button type="button" class="btn default" data-dismiss="modal">Close</button>
                  </div>
               </div>
               <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
         </div>
         <!-- /.modal -->
         <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
         <!-- BEGIN STYLE CUSTOMIZER -->
         <div class="theme-panel hidden-xs hidden-sm">
            <div class="toggler"></div>
            <div class="toggler-close"></div>
            <div class="theme-options">
               <div class="theme-option theme-colors clearfix">
                  <span>THEME COLOR</span>
                  <ul>
                     <li class="color-black current color-default" data-style="default"></li>
                     <li class="color-blue" data-style="blue"></li>
                     <li class="color-brown" data-style="brown"></li>
                     <li class="color-purple" data-style="purple"></li>
                     <li class="color-grey" data-style="grey"></li>
                     <li class="color-white color-light" data-style="light"></li>
                  </ul>
               </div>
               <div class="theme-option">
                  <span>Layout</span>
                  <select class="layout-option form-control input-small">
                     <option value="fluid" selected="selected">Fluid</option>
                     <option value="boxed">Boxed</option>
                  </select>
               </div>
               <div class="theme-option">
                  <span>Header</span>
                  <select class="header-option form-control input-small">
                     <option value="fixed" selected="selected">Fixed</option>
                     <option value="default">Default</option>
                  </select>
               </div>
               <div class="theme-option">
                  <span>Sidebar</span>
                  <select class="sidebar-option form-control input-small">
                     <option value="fixed">Fixed</option>
                     <option value="default" selected="selected">Default</option>
                  </select>
               </div>
               <div class="theme-option">
                  <span>Footer</span>
                  <select class="footer-option form-control input-small">
                     <option value="fixed">Fixed</option>
                     <option value="default" selected="selected">Default</option>
                  </select>
               </div>
            </div>
         </div>
         <!-- END BEGIN STYLE CUSTOMIZER -->  
               
         <!-- BEGIN PAGE HEADER-->
         <div class="row">
            <div class="col-md-12">
               <!-- BEGIN PAGE TITLE & BREADCRUMB-->
               <h3 class="page-title">
                  Dashboard <small>statistics and more</small>
               </h3>
               <ul class="page-breadcrumb breadcrumb">
                  <li>
                     <i class="icon-home"></i>
                     <a href="index.html">Home</a> 
                     <i class="icon-angle-right"></i>
                  </li>
                  <li><a href="#">Dashboard</a></li>
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

         <!-- BEGIN DASHBOARD STATS -->
           <?php echo (isset($dashboard_stats)) ? $dashboard_stats : ''; ?>
         <!-- END DASHBOARD STATS -->

         <div class="clearfix"></div>
         <div class="row">
            <div class="col-md-6 col-sm-6">
               Content Here 
            </div>
         </div>
      </div>
      <!-- END PAGE -->
   </div>
   <!-- END CONTAINER -->

   <!-- BEGIN FOOTER -->
   <div class="footer">
      <?php echo (isset($footer_view)) ? $footer_view : ''; ?>
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
   <script src="<?php echo base_url()?>assets/admin/plugins/bootstrap-daterangepicker/moment.min.js" type="text/javascript"></script>
   <script src="<?php echo base_url()?>assets/admin/plugins/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>     
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
         Index.initJQVMAP(); // init index page's custom scripts
         Index.initCalendar(); // init index page's custom scripts
         Index.initCharts(); // init index page's custom scripts
         Index.initChat();
         Index.initMiniCharts();
         Index.initDashboardDaterange();
         Index.initIntro();
         Tasks.initDashboardWidget();
      });
   </script>
   <!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
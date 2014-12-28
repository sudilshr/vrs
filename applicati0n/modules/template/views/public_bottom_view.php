    <!-- Load javascripts at bottom, this will reduce page load time -->

    <!-- BEGIN CORE PLUGINS(REQUIRED FOR ALL PAGES) -->

    <!--[if lt IE 9]>

    <script src="<?php echo base_url()?>assets/plugins/respond.min.js"></script>  

    <![endif]-->  
    <script src="<?php echo base_url()?>assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>      
    <script type="text/javascript" src="<?php echo base_url()?>assets/plugins/hover-dropdown.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/plugins/back-to-top.js"></script>    
    <!-- END CORE PLUGINS -->



    <!-- BEGIN PAGE LEVEL JAVASCRIPTS(REQUIRED ONLY FOR CURRENT PAGE) -->
    <script type="text/javascript" src="<?php echo base_url()?>assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>  
    <script type="text/javascript" src="<?php echo base_url()?>assets/plugins/revolution_slider/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/plugins/revolution_slider/rs-plugin/js/jquery.themepunch.revolution.min.js"></script> 
    <script type="text/javascript" src="<?php echo base_url()?>assets/plugins/bxslider/jquery.bxslider.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>     
    <script src="<?php echo base_url()?>assets/scripts/app.js"></script>
    <script src="<?php echo base_url()?>assets/scripts/index.js"></script>    
    <script type="text/javascript">
        jQuery(document).ready(function() {
            App.init();    
            App.initBxSlider();
            Index.initRevolutionSlider(); 

            
			//datetime picker
                        var currentdate = new Date();
			$(".form_datetime").datetimepicker({
				autoclose: true,
				todayHighlight: true,
				showMeridian: true,
				format: "dd MM yyyy - H:i P",
                                startDate: currentdate,
				//isRTL: App.isRTL() ,
				
				//pickerPosition: (App.isRTL() ? "bottom-right" : "bottom-left")
			});
                        
                        $('.bxslider').bxSlider({
                            mode: 'fade',
                            captions: true
                        });

        });

    </script>

    <!-- END PAGE LEVEL JAVASCRIPTS -->

	
</body>

<!-- END BODY -->

</html>
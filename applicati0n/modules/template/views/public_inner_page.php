<!-- BEGIN BREADCRUMBS -->   
<div class="row breadcrumbs margin-bottom-40">
        <div class="container">
                <div class="col-md-4 col-sm-4">
                        <h1><?php echo isset($page_title)?$page_title:''; ?></h1>
                </div>
                <!--
                <div class="col-md-8 col-sm-8">
                        <ul class="pull-right breadcrumb">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="">Pages</a></li>
                                <li class="active">Services</li>
                        </ul>
                </div>
                -->
        </div>
</div>
<!-- END BREADCRUMBS -->
<!-- BEGIN PAGE CONTAINER -->  
    <div class="page-container">
        <!-- BEGIN CONTAINER -->   
        <div class="container">

        <?php
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

<!-- END CONTAINER -->
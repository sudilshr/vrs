<!-- BEGIN PAGE CONTAINER -->  
    <div class="page-container">


        <!-- BEGIN CONTAINER -->   

        <div class="container">
        
            <form action="<?php echo base_url();?>reservation/step/3" class="form-horizontal" role="form" method="post">
            <div class="row margin-bottom-10">
    
                
                <?php
                foreach ($q_vehicle->result() as $veh_row) {
                
                //get vehicle type title from id
                $q_vendor = Modules::run('type/get_where', $veh_row->veh_type_id);
                foreach ($q_vendor->result() as $v_row) {
                    $type_title=$v_row->type_title;
                }
           
                
                //get vehicle vendor title from id
                $q_vendor = Modules::run('vendor/get_where', $veh_row->veh_vendor_id);
                foreach ($q_vendor->result() as $v_row) {
                    $vendor_title=$v_row->vendor_title;
                }
                ?>
                <div class="col-md-12">                    
                        <div class="pricing">                            
                                <div class="pricing-head">                                    
                                        <h3><?php echo $type_title.'| '.$vendor_title.' '.$veh_row->veh_model;?></h3> 
                                        
                                        <img width ="100%" src="<?php echo base_url().'assets/img/vehicle/'.$veh_row->veh_img_url;?>" />
                                        
                                                                                                                      
                                </div>
                                
                                <ul class="pricing-content list-unstyled">
                                        <li title ="Number of passengers"><i class="icon-user"></i> 4</li>
                                        <li title ="Fuel Type"><i class="icon-tint"></i> Diesel</li>
                                        <li title ="N/A"><i class="icon-cloud"></i> N/A</li>
                                </ul>
                                <div class="pricing-footer">
                                Note:
                                                                                                                                                                         
                                </div>
                                <input type="hidden" name="vehicle_id" value="<?php echo $veh_row->id ;?>" />
                                
                                <input type="hidden" name="tax_amount" value="134.00"/>
                        </div>                                     
                </div>
                <?php
                }
                ?>
            </div>
            </form>
             


        </div>

        <!-- END CONTAINER -->
        

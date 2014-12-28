<!-- BEGIN PAGE CONTAINER -->  
    <div class="page-container">


        <!-- BEGIN CONTAINER -->   

        <div class="container">
        
            <form action="<?php echo base_url();?>reservation/step/3" class="form-horizontal" role="form" method="post">
            <div class="row margin-bottom-10">
                <div class="col-md-3">
                    
                    <div class="panel panel-info">
                        <div class="panel-heading"><h3 class="panel-title">Booking Details</h3></div> 
                        <div class="panel-body">
                        <?php
                        if ($_SERVER['REQUEST_METHOD']=="POST"){
                            $start_date_time = $_POST['start_date_time'];
                            $drop_off_date_time = $_POST['drop_off_date_time'];
                            $pickup_location = $_POST['pickup_location'];
                            $drop_off_location = $_POST['drop_off_location'];
                            $vehicle_type = $_POST['vehicle_type'];
                            
                            // get per km charge from settings
                            $set_query = Modules::run('settings/get', 'id');
                            foreach ($set_query->result() as $set_row) {
                                
                                if ($set_row->title=="PER_KM_CHARGE_NPR") $per_km_charge = $set_row->value;
                                if ($set_row->title=="OFF_ROAD_EXTRA_PERCENT") $off_road_extra = $set_row->value;
                                    
                            }
                            
                            // get location title
                            $loc_query = Modules::run('location/get', 'id');
                            foreach ($loc_query->result() as $loc_row) {
                                if ($pickup_location==$loc_row->id){
                                    $pickup_location_title = $loc_row->name;
                                
                                }
                               
                                if ($drop_off_location==$loc_row->id){ 
                                    $drop_off_location_title = $loc_row->name;
                                    $total_km=$loc_row->total_km_from_start;
                                }
                            }
                            
                            // get vehicle type title
                            $type_query = Modules::run('type/get_where', $vehicle_type);
                            foreach ($type_query->result() as $t_row) {
                                $vehicle_type_title = $t_row->type_title;
                                $price_ratio = $t_row->price_rate_ratio;
                                
                            }
                            
                            $total_price = (($total_km*2) * $per_km_charge)+($off_road_extra/100)*(($total_km*2) * $per_km_charge);
                            $total_price = $total_price * $price_ratio;
                            //$total_price = number_format((float)$total_price, 2, '.', ',');
                            
                            echo '<table>';
                            echo '<tr><td colspan="2"><b>Time & Place</b><hr /></td></tr>';
                            echo '<tr><td width="35%"><i>Pick-up :</i><br />&nbsp</td><td>'.$start_date_time.'<br />'.$pickup_location_title.'</td></tr>';
                            echo '<tr><td><i>Drop-off :</i><br />&nbsp</td><td>'.$drop_off_date_time.'<br />'.$drop_off_location_title.'</td></tr>';
                            echo '</table>';
                            
                            
                            echo '<input type="hidden" name="start_date_time" value="'.$start_date_time.'">';               
                            echo '<input type="hidden" name="drop_off_date_time" value="'.$drop_off_date_time.'">';               
                            echo '<input type="hidden" name="pickup_location" value="'.$pickup_location.'">';               
                            echo '<input type="hidden" name="drop_off_location" value="'.$drop_off_location.'">';               
                            echo '<input type="hidden" name="vehicle_type" value="'.$vehicle_type.'">'; 
                            echo '<input type="hidden" name="total_price" value="'.$total_price.'"/>';
                            
                            
                            
                            }
                        ?>
                            
                        </div>
                    </div>
                </div>
                
                <?php
                foreach ($q_v_filter->result() as $veh_row) {
                
                //get vehicle type title from id
                $q_type = Modules::run('type/get_where', $veh_row->veh_type_id);
                foreach ($q_type->result() as $v_row) {
                    $type_title=$v_row->type_title;
                    $seats_count = $v_row->seats_count;
                }
           
                
                //get vehicle vendor title from id
                $q_vendor = Modules::run('vendor/get_where', $veh_row->veh_vendor_id);
                foreach ($q_vendor->result() as $v_row) {
                    $vendor_title=$v_row->vendor_title;
                    
                }
                ?>
                <div class="col-md-9" style="float:right;">                    
                        <div class="pricing">                            
                                <div class="pricing-head">                                    
                                        <h3><?php echo $type_title.'| '.$vendor_title.' '.$veh_row->veh_model;?></h3>
                                        <h1><img width ="100%" src="<?php echo base_url().'assets/img/vehicle/'.$veh_row->veh_img_url;?>" /></h1>
                                        
                                        <button class="btn blue" style="margin-top: 35px;float: right;margin-right: 15px;" type="submit">Select <i class="m-icon-swapright m-icon-white"></i></button> 
                                        <h4 style="background: #EEEEEE">Rs. <?php echo number_format((float)$total_price, 2, '.', ',') ;?> <span>Total Price</span></h4>                                                                                
                                </div>
                                
                                <ul class="pricing-content list-inline">
                                        <li title ="Number of passengers"><i class="icon-user"></i> <?php echo $seats_count; ?></li>
                                        <li title ="Fuel Type"><i class="icon-tint"></i><?php echo ucfirst($veh_row->veh_fuel_type); ?> </li>
                                        <li title ="N/A"><i class="icon-cloud"></i> N/A</li>
                                </ul>
                                <div class="pricing-footer">
                                Note:
                                                                                                                                                                         
                                </div>
                                <input type="hidden" name="vehicle_id" value="<?php echo $veh_row->id ;?>" />
                                
                                <input type="hidden" name="tax_amount" value="13.00"/>
                        </div>                                     
                </div>
                <?php
                }
                ?>
            </div>
            </form>
             


        </div>

        <!-- END CONTAINER -->
        

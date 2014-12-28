    <!-- BEGIN PAGE CONTAINER -->  
    <div class="page-container">
        <!-- BEGIN CONTAINER -->   
        <div class="container"> 
            <form action="<?php echo base_url();?>reservation/step/4" class="form-horizontal" role="form" method="post">
            
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
                        $vehicle_id = $_POST['vehicle_id'];
                        $total_price = $_POST['total_price'];
                        $tax_amount = $_POST['tax_amount'];
                        
                        

                        $loc_query = Modules::run('location/get', 'id');
                        foreach ($loc_query->result() as $loc_row) {
                            if ($pickup_location==$loc_row->id) $pickup_location_title = $loc_row->name;
                            if ($drop_off_location==$loc_row->id) $drop_off_location_title = $loc_row->name;
                        }

                        $type_query = Modules::run('type/get_where', $vehicle_type);
                        foreach ($type_query->result() as $t_row) {
                            $vehicle_type_title = $t_row->type_title;

                        }
                        
                        

                        echo '<table>';
                        echo '<tr><td colspan="2"><b>Time & Place</b><hr /></td></tr>';
                        echo '<tr><td width="35%"><i>Pick-up :</i><br />&nbsp</td><td>'.$start_date_time.'<br />'.$pickup_location_title.'</td></tr>';
                        echo '<tr><td><i>Drop-off :</i><br />&nbsp</td><td>'.$drop_off_date_time.'<br />'.$drop_off_location_title.'</td></tr>';
                        
                        
                        echo '<tr><td colspan="2"><b>Vehicle</b><hr /></td></tr>';
                        echo '<tr><td><i>Vehicle Type :</i><br />&nbsp</td><td>'.$vehicle_type_title.'<br />&nbsp</td></tr>';
                        
                        
                        echo '</table>';


                        echo '<input type="hidden" name="start_date_time" value="'.$start_date_time.'">';               
                        echo '<input type="hidden" name="drop_off_date_time" value="'.$drop_off_date_time.'">';               
                        echo '<input type="hidden" name="pickup_location" value="'.$pickup_location.'">';               
                        echo '<input type="hidden" name="drop_off_location" value="'.$drop_off_location.'">';               
                        echo '<input type="hidden" name="vehicle_type" value="'.$vehicle_type.'">';  
                        echo '<input type="hidden" name="vehicle_id" value="'.$vehicle_id.'">';  
                        echo '<input type="hidden" name="total_price" value="'.$total_price.'">';
                        echo '<input type="hidden" name="tax_amount" value="'.$tax_amount.'">';


                        }
                    ?>

                    </div>
                </div>
            </div>
            
        
                    
            <div class="col-md-9 ">
                <div class="panel panel-info">
                    <div class="panel-heading"><h3 class="panel-title">Prices & Payment</h3></div> 
                    <div class="panel-body">
                        
                        <h2>Price</h2><hr />
                        <div class="form-body">
                            <div class="form-group">
                                <label class="control-label col-md-3">Total Price</label>
                                <label class="control-label col-md-6"><b>Rs. <?php echo number_format((float)$total_price, 2, '.', ','); ?></b></label>      
                            </div>
                        </div>
                    
            
                
                
                        <h2>Personal Details</h2><hr />

                        <div class="form-group">
                            <label class="control-label col-md-3">Name</label>
                            <div class="col-md-9">
                                <input name="name" class="form-control" type="text" required />
                            </div>                            

                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Phone</label>
                            <div class="col-md-9">
                                <input name="phone" class="form-control" type="text" required />
                            </div>                            
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Email</label>
                            <div class="col-md-9">
                                <input name="email" class="form-control" type="email" required />
                            </div>                            
                        </div>


                        
                        <h2>Payment Method</h2><hr />

                        <div class="form-group">
                            <label class="control-label col-md-3">Payment Method</label>
                                <div class="col-md-9">
                                    <select name="payment_mode" class="form-control">
                                        <option value="1">Paypal</option>
                                        <option value="2">eSewa</option>
                                    </select>
                                </div>                         

                        </div>
                        <hr />
                        <div class="form-actions fluid">
                            <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn green">Confirm Booking</button>                             
                            </div>    
                        </div>
                        
                        
                    </div>
            </div>
                
            </div>
            
            <input type="hidden" name="booking_status" value="PENDING" />
            </form>

        </div>

        <!-- END CONTAINER -->
            </div>


        </div>

        <!-- END CONTAINER -->
        

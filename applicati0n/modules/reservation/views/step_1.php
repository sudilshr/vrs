
<!-- BEGIN PAGE CONTAINER -->  
    <div class="page-container">


        <!-- BEGIN CONTAINER -->   

        <div class="container">
        

            <div class="col-md-12 ">
            <div class="panel panel-info">
                  	<div class="panel-heading"><h3 class="panel-title">Book a Vehicle</h3></div>
                        
                    <div class="panel-body">
                     <form id="step_1_form" action="<?php echo base_url();?>reservation/step/2" class="form-horizontal" role="form" method="post">
                        <div class="form-body">
                            
                            <div class="form-group">               

                    
                    
                                    <label class="control-label col-md-3">Start Date/Time</label>
                                    <div class="col-md-9">
                                            <div class="input-group date form_datetime">                                       
                                            
                                            
                                            <input id="start_date_time" type="text" size="16" class="form-control" name="start_date_time" minlength="2" required />
                                            
                                            <span class="input-group-btn">
                                            <button class="btn default date-set" type="button"><i class="icon-calendar"></i></button>
                                            </span>
                                            </div>
                                    </div>  
                            </div>
                            <div class="form-group">               
                                    <label class="control-label col-md-3">Drop Off Date/Time</label>
                                    <div class="col-md-9">
                                            <div class="input-group date form_datetime">                                       
                                            <input id="drop_off_date_time" type="text" size="16" class="form-control" name="drop_off_date_time" required />
                                            <span class="input-group-btn">
                                            <button class="btn default date-set" type="button"><i class="icon-calendar"></i></button>
                                            </span>
                                            </div>
                                    </div>  
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Pickup Location</label>
                                <div class="col-md-9">
                                    <select class="form-control" name="pickup_location" required />
                                        <?php
                                        foreach ($loc_name->result() as $p_row) {
                                                echo '<option value="'.$p_row->id.'">'.$p_row->name.'</option>';
                                        }
                                        ?>
                                 
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Drop Off Location</label>
                                <div class="col-md-9">
                                    <select  class="form-control" name="drop_off_location">
                                        <?php
                                        foreach ($loc_name->result() as $d_row) {
                                            if ($d_row->name!="Kathmandu")    
                                                echo '<option value="'.$d_row->id.'">'.$d_row->name.'</option>';
                                        }
                                        ?>
                                       
                                    </select>
                                    <label><input type="checkbox"> Same as the pick-up location</label>
                                   
                                </div>
                                 
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-md-3">Vehicle Type</label>
                                <div class="col-md-9">
                                    <select class="form-control" name="vehicle_type">
                                        <?php
                                        foreach ($v_type_name->result() as $t_row) {
                                                echo '<option value="'.$t_row->id.'">'.$t_row->type_title.'</option>';
                                        }
                                        ?>
                                    </select>
                                 
                                   
                                </div>
                                 
                            </div>


                        </div>
                        <div class="form-actions fluid">
                           <div class="col-md-offset-3 col-md-9">
                              <button type="submit" class="btn green">Book/Get a Quote</button>                             
                           </div>
                        </div>
                     </form>
                    </div>
                </div>
            
            </div>


        </div>

        <!-- END CONTAINER -->
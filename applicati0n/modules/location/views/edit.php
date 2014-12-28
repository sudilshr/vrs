<div class="portlet box blue">                 
    <div class="portlet-title">             
        <div class="caption">Edit Vehicle</div>                  
    </div>   
    <div class="portlet-body">                     
        
        <div class="table-responsive">
            <!-- BEGIN FORM-->
            <form action="<?php echo base_url();?>dashboard/location/submit" class="form-horizontal form-row-seperated" method="post">
                <div class="form-body">
                    
                <div class="form-group">
                    <label class="control-label col-md-3">ID</label>
                    <div class="col-md-9">
                        <input type="text" name="id" value="<?php echo $update_id;?>" class="form-control" ReadOnly />
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Name</label>
                    <div class="col-md-9">
                        <input type="text" name="loc_name" value="<?php echo $loc_name;?>"class="form-control" />
                    </div>
                </div>   
                <div class="form-group">
                    <label class="control-label col-md-3">Street</label>
                    <div class="col-md-9">
                        <input type="text" name="loc_street" value="<?php echo $loc_street;?>" class="form-control" />
                    </div>
                </div> 
                <div class="form-group">
                    <label class="control-label col-md-3">City</label>
                    <div class="col-md-9">
                        <input type="text" name="loc_city" value="<?php echo $loc_city;?>" class="form-control" />
                    </div>
                </div> 
                
                <div class="form-group">
                    <label class="control-label col-md-3">District</label>
                    <div class="col-md-9">
                        <input type="text" name="loc_district" value="<?php echo $loc_district;?>" class="form-control" />
                    </div>
                </div> 
                <div class="form-group">
                    <label class="control-label col-md-3">Zone</label>
                    <div class="col-md-9">
                        <input type="text" name="loc_zone" value="<?php echo $loc_zone;?>" class="form-control" />
                    </div>
                </div> 
                    
                
                <div class="form-group">
                    <label class="control-label col-md-3">Start Location</label>
                    <div class="col-md-9">
                        <select name="loc_start_location" class="form-control">
                                <?php
                                foreach ($loc_name_list->result() as $row) {
                                    if($loc_start_location_id==$row->id){
                                        echo '<option value="'.$row->id.'" selected>'.$row->name.'</option>';
                                    } else {   
                                        echo '<option value="'.$row->id.'">'.$row->name.'</option>';
                                    }

                                }
                                ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Total KM from Start Location</label>
                    <div class="col-md-9">
                        <input type="text" name="loc_total_km" value="<?php echo $loc_total_km;?>" class="form-control" />
                    </div>
                </div> 
                <div class="form-group">
                    <label class="control-label col-md-3">Road Type</label>
                    <div class="col-md-9">
                        <select name="loc_road_type" class="form-control">
                            <option value="onroad" <?php if ($loc_road_type_id==0) echo "selected"?>>On Road</option>
                            <option value="offroad" <?php if ($loc_road_type_id==1) echo "selected"?>>Off Road</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3">Default Rate</label>
                    <div class="col-md-9">
                        <input type="text" name="loc_default_rate" value="<?php echo $loc_default_rate;?>" class="form-control" />
                    </div>
                </div>
                <input type="hidden" name="action" value="EDIT"/>
                <div class="form-actions fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-offset-3 col-md-9">
                            <button type="submit" class="btn green"><i class="icon-edit"></i> Edit</button>
                            <button type="reset" class="btn default">Reset</button>                              
                        </div>
                    </div>
                </div>
                </div>
				
		
            </form>
            <!-- END FORM-->  
        </div>            
        
    </div>
</div>


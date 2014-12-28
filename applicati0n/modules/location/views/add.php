<div class="portlet box blue">                 
    <div class="portlet-title">             
        <div class="caption">Add Location</div>                  
    </div>   
    <div class="portlet-body">                     
        
        <div class="table-responsive">
            <!-- BEGIN FORM-->
            <form action="<?php echo base_url();?>dashboard/location/submit" class="form-horizontal form-row-seperated" method="post">
                <div class="form-body">
                <div class="form-group">
                    <label class="control-label col-md-3">ID</label>
                    <div class="col-md-9">
                        <input type="text" name="id" value="<?php echo (int)$q_loc_max+1;?>" class="form-control" ReadOnly />
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Name</label>
                    <div class="col-md-9">
                        <input type="text" name="loc_name" class="form-control" />
                    </div>
                </div>   
                <div class="form-group">
                    <label class="control-label col-md-3">Street</label>
                    <div class="col-md-9">
                        <input type="text" name="loc_street"  class="form-control" />
                    </div>
                </div> 
                <div class="form-group">
                    <label class="control-label col-md-3">City</label>
                    <div class="col-md-9">
                        <input type="text" name="loc_city"  class="form-control" />
                    </div>
                </div> 
                <div class="form-group">
                    <label class="control-label col-md-3">District</label>
                    <div class="col-md-9">
                        <input type="text" name="loc_district"  class="form-control" />
                    </div>
                </div> 
                <div class="form-group">
                    <label class="control-label col-md-3">Zone</label>
                    <div class="col-md-9">
                        <input type="text" name="loc_zone"  class="form-control" />
                    </div>
                </div> 
                    
                
                <div class="form-group">
                    <label class="control-label col-md-3">Start Location</label>
                    <div class="col-md-9">
                        <select name="loc_start_location" class="form-control">
                                <?php
                                foreach ($loc_name->result() as $row) {
                                        echo '<option value="'.$row->id.'">'.$row->name.'</option>';
                                }
                                ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Total KM from Start Location</label>
                    <div class="col-md-9">
                        <input type="text" name="loc_total_km" placeholder="" class="form-control" />
                    </div>
                </div> 
                <div class="form-group">
                    <label class="control-label col-md-3">Road Type</label>
                    <div class="col-md-9">
                        <select name="loc_road_type" class="form-control">
                            <option value="0">On Road</option>
                            <option value="1">Off Road</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3">Default Rate</label>
                    <div class="col-md-9">
                        <input type="text" name="loc_default_rate" class="form-control" />
                    </div>
                </div>
                <input type="hidden" name="action" value="NEW"/>
                <div class="form-actions fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-offset-3 col-md-9">
                            <button type="submit" class="btn green"><i class="icon-pencil"></i> Add</button>
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


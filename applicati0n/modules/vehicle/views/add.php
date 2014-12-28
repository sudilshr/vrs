<div class="portlet box blue">                 
    <div class="portlet-title">             
        <div class="caption">Add Vehicle</div>                  
    </div>   
    <div class="portlet-body">                     
        
        <div class="table-responsive">
            <!-- BEGIN FORM-->
            <form action="<?php echo base_url();?>dashboard/vehicle/submit" class="form-horizontal form-row-seperated" method="post">
                <div class="form-body">
                    
                <div class="form-group">
                    <label class="control-label col-md-3">ID</label>
                    <div class="col-md-9">
                        <input type="text" name="id" value="<?php echo (int)$q_vehicle_max+1;?>" class="form-control" ReadOnly />
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Vehicle Type</label>
                    <div class="col-md-9">
                        <select name="v_type" class="form-control">
							<?php
							foreach ($q_type->result() as $row) {
								echo '<option value="'.$row->id.'">'.$row->type_title.'</option>';
							}
							?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Vendor</label>
                    <div class="col-md-9">
                        <select name="v_vendor" class="form-control">
                            <?php
							foreach ($q_vendor->result() as $row) {
								echo '<option value="'.$row->id.'">'.$row->vendor_title.'</option>';
							}
							?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Model</label>
                    <div class="col-md-9">
                        <input type="text" name="v_model" placeholder="eg: Fiesta" class="form-control" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Registration No</label>
                    <div class="col-md-9">
                        <input type="text" name="v_reg_no" placeholder="eg: BA 9 CHA 9999" class="form-control" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Fuel Type</label>
                    <div class="col-md-9">
                        <select name="v_fuel_type" class="form-control">
                            <option value="diesel">Diesel</option>
							<option value="petrol">Petrol</option>
                            
                            <option value=""></option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Mileage</label>
                    <div class="col-md-9">
                        <input type="text" name="v_mileage" placeholder="eg: 18KM/L" class="form-control" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Vehicle Image</label>
                    <div class="col-md-9">
                        <input type="text" name="v_img_url" value="veh_pic_na.jpg" class="form-control" >
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


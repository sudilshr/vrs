<div class="portlet box blue">                 
    <div class="portlet-title">             
        <div class="caption">Edit Vehicle</div>                  
    </div>   
    <div class="portlet-body">                     
        
        <div class="table-responsive">
            <!-- BEGIN FORM-->
            <form action="<?php echo base_url();?>dashboard/vehicle/submit" class="form-horizontal form-row-seperated" method="post">
                <div class="form-body">
                    
                <div class="form-group">
                    <label class="control-label col-md-3">ID</label>
                    <div class="col-md-9">
                        <input type="text" name="id" value="<?php echo $update_id;?>" class="form-control" ReadOnly />
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Vehicle Type</label>
                    <div class="col-md-9">
                        <select name="v_type" class="form-control">
                                <?php
                                foreach ($q_type->result() as $row) {
                                    if($veh_type_id==$row->id){
                                        echo '<option value="'.$row->id.'" selected>'.$row->type_title.'</option>';
                                    } else {   
                                        echo '<option value="'.$row->id.'">'.$row->type_title.'</option>';
                                    }

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
                                                            if ($veh_vendor_id==$row->id){
                                                                echo '<option value="'.$row->id.'" selected>'.$row->vendor_title.'</option>';
                                                            }else{
								echo '<option value="'.$row->id.'">'.$row->vendor_title.'</option>';
                                                            }
							}
							?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Model</label>
                    <div class="col-md-9">
                        <input type="text" name="v_model" value="<?php echo $veh_model; ?>" placeholder="eg: Fiesta" class="form-control" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Registration No</label>
                    <div class="col-md-9">
                        <input type="text" name="v_reg_no" value="<?php echo $veh_reg_no; ?>" placeholder="eg: BA 9 CHA 9999" class="form-control" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Fuel Type</label>
                    <div class="col-md-9">
                        <select name="v_fuel_type" class="form-control">
                            <?php 
                                if(strtolower($veh_fuel_type)=="diesel"){
                                    echo'<option value="diesel" selected >Diesel</option>';
                                    echo'<option value="petrol" >Petrol</option>';
                                } else {
                                    echo'<option value="diesel" >Diesel</option>';
                                    echo'<option value="petrol" selected>Petrol</option>';
                                } 
                              
                            
                            ?>
                            
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Mileage</label>
                    <div class="col-md-9">
                        <input type="text" name="v_mileage" value="<?php echo $veh_mileage; ?>" placeholder="eg: 18KM/L" class="form-control" >
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


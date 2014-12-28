<div class="portlet box blue">                 
    <div class="portlet-title">             
        <div class="caption">Vehicle Details</div>                  
    </div>   
    <div class="portlet-body">                     
        
        <div class="table-responsive">

            <form class="form-horizontal form-row-seperated">
                <div class="form-body">
                    
                <div class="form-group">
                    <label class="control-label col-md-3">ID :</label>
                    <label class="control-label"><b><?php echo $update_id;?></b></label>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Name :</label>
                    <label class="control-label"><b><?php echo $loc_name;?></b></label>
                </div>   
                <div class="form-group">
                    <label class="control-label col-md-3">Street :</label>
                    <label class="control-label"><b><?php echo $loc_street;?></b></label>
                </div> 
                <div class="form-group">
                    <label class="control-label col-md-3">City :</label>
                    <label class="control-label"><b><?php echo $loc_city;?></b></label>
                </div> 
                
                <div class="form-group">
                    <label class="control-label col-md-3">District :</label>
                    <label class="control-label"><b><?php echo $loc_district;?></b></label>
                </div> 
                <div class="form-group">
                    <label class="control-label col-md-3">Zone :</label>
                    <label class="control-label"><b><?php echo $loc_zone;?></b></label>
                </div> 
                    
                
                <div class="form-group">
                    <label class="control-label col-md-3">Start Location :</label>
                    <?php
                    foreach ($loc_name_list->result() as $row) {
                        if($loc_start_location_id==$row->id){
                            echo '<label class="control-label"><b>'.$row->name.'</b></label>';
                        }
                    }
                    ?>                        
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Total KM from Start Location :</label>
                    <label class="control-label"><b><?php echo $loc_total_km;?></b></label>
                </div> 
                <div class="form-group">
                    <label class="control-label col-md-3">Road Type :</label>
                    <label class="control-label">
                        <b>
                            <?php 
                            if ($loc_road_type_id==0) 
                                echo "On Road"; 
                            else 
                                echo "Off Road";
                            ?>
                        </b>
                    </label>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3">Default Rate :</label>
                    <label class="control-label"><b><?php echo $loc_default_rate;?></b></label>
                </div>
                <input type="hidden" name="action" value="EDIT"/>
                <div class="form-actions fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-offset-3 col-md-9">
                            <a class="btn green" href="<?php echo base_url();?>dashboard/location/manage/"><i class="icon-minus-sign"></i> Close</a>                             
                        </div>
                    </div>
                </div>
                </div>
				
		
            </form>
            
        </div>            
        
    </div>
</div>


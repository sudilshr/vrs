<div class="portlet box blue">                 
    <div class="portlet-title">             
        <div class="caption">Reservation Details</div>                  
    </div>   
    <div class="portlet-body">                     
        
        <div class="table-responsive">

            <form class="form-horizontal form-row-seperated">
                <div class="form-body">
                    
                <div class="form-group">
                    <label class="control-label col-md-3">ID :</label>
                    <label class="control-label"><b><?php echo $details_id;?></b></label>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Customer :</label>
                    <label class="control-label"><b><?php echo $p_name;?></b></label>
                </div> 
                <div class="form-group">
                    <label class="control-label col-md-3">Start Date/Time :</label>
                    <label class="control-label"><b><?php echo $from_date;?></b></label>
                </div>   
                <div class="form-group">
                    <label class="control-label col-md-3">End Date/Time :</label>
                    <label class="control-label"><b><?php echo $to_date;?></b></label>
                </div> 
                <div class="form-group">
                    <label class="control-label col-md-3">Vehicle :</label>
                    <label class="control-label"><b><?php echo $type_title.' '.$vendor_title.' '.$veh_model;?></b></label>
                </div> 
                
                <div class="form-group">
                    <label class="control-label col-md-3">Pickup Location :</label>
                    <label class="control-label"><b><?php echo $pickup_title;?></b></label>
                </div> 
                <div class="form-group">
                    <label class="control-label col-md-3">Drop Location :</label>
                    <label class="control-label"><b><?php echo $destination_title;?></b></label>
                </div> 
                <div class="form-group">
                    <label class="control-label col-md-3">Payment Mode :</label>
                    <label class="control-label"><b><?php echo "";?></b></label>
                </div> 
                <div class="form-group">
                    <label class="control-label col-md-3">Total Charge :</label>
                    <label class="control-label"><b><?php echo $total_charge;?></b></label>
                </div> 
                <div class="form-group">
                    <label class="control-label col-md-3">Advance :</label>
                    <label class="control-label"><b><?php echo $advance;?></b></label>
                </div> 
                    
                <div class="form-group">
                    <label class="control-label col-md-3">Booking Status :</label>
                    <label class="control-label"><b><?php echo $booking_status;?></b></label>
                </div> 
                    

                <div class="form-actions fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-offset-3 col-md-9">
                            <a class="btn green" href="<?php echo base_url();?>dashboard/reservation/manage/"><i class="icon-minus-sign"></i> Close</a>                             
                        </div>
                    </div>
                </div>
                </div>
				
		
            </form>
            
        </div>            
        
    </div>
</div>


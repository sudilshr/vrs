<?php 
	if(isset($submit_msg)){
		echo '<div class="alert alert-success"><strong>'.$submit_msg.'</strong></div>';
	}
?>
<div class="portlet box blue">                 
    <div class="portlet-title">             
        <div class="caption">Global Settings</div>                  
    </div>   
    <div class="portlet-body">                     
        
        <div class="table-responsive">
            <!-- BEGIN FORM-->
            <form action="<?php echo base_url();?>dashboard/vehicle/submit" class="form-horizontal form-row-seperated" method="post">
                <div class="form-body">
                    
                
                    
                    <?php
                    //$query = Modules::run('settings/get_where_custom', 'title','DEFAULT_LOCATION_ID');
					$query = Modules::run('settings/get','id');
                    foreach ($query->result() as $row) {
						echo '<div class="form-group"><label class="control-label col-md-3">'.$row->title.'</label>';
						echo '<div class="col-md-9">';
                        echo '<input type="text" name="id" value="'.$row->value.'" class="form-control" /></div></div>';
                    } 
                    ?>
                    
                
                

                <div class="form-actions fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-offset-3 col-md-9">
                            <button type="submit" class="btn green"><i class="icon-save"></i> Save</button>
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


<div class="portlet box blue">                 
    <div class="portlet-title">             
        <div class="caption">Edit Vehicle Type</div>                  
    </div>   
    <div class="portlet-body">                     

        
        <div class="table-responsive">
            <!-- BEGIN FORM-->
            <form action="<?php echo base_url();?>dashboard/type/submit"" class="form-horizontal form-row-seperated" method="post">
                <div class="form-body">

                <div class="form-group">
                    <label class="control-label col-md-3">ID</label>
                    <div class="col-md-9">
                        <input type="text" name="id" value="<?php echo $update_id; ?>" class="form-control" ReadOnly />
                    </div>
                </div>
                    
                <div class="form-group">
                    <label class="control-label col-md-3">Title</label>
                    <div class="col-md-9">
                        <input type="text" name="title" value="<?php echo $type_title; ?>" placeholder="eg: Car" class="form-control" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Description</label>
                    <div class="col-md-9">
                        <input type="text" name="description" value="<?php echo $type_desc; ?>" placeholder="" class="form-control" />
                    </div>
                </div>
                    
                <div class="form-group">
                    <label class="control-label col-md-3">Seats Count</label>
                    <div class="col-md-9">
                        <input type="text" name="seats_count" value="<?php echo $seats_count; ?>" placeholder="Total no of Seats including driver seat" class="form-control" />
                    </div>
                </div>
                    
                <div class="form-group">
                    <label class="control-label col-md-3">Price Ratio</label>
                    <div class="col-md-9">
                        <input type="text" name="price_ratio" value="<?php echo $price_rate; ?>" placeholder="" class="form-control" />
                    </div>
                </div>

                <input type="hidden" name="action" value="EDIT"/>
                
                <div class="form-actions fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-offset-3 col-md-9">
                            <button type="submit" class="btn green"><i class="icon-pencil"></i> Edit</button>
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


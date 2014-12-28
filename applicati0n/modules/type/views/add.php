<div class="portlet box blue">                 
    <div class="portlet-title">             
        <div class="caption">Add Vehicle Type</div>                  
    </div>   
    <div class="portlet-body">                     

        
        <div class="table-responsive">
            <!-- BEGIN FORM-->
            <form action="<?php echo base_url();?>dashboard/type/submit"" class="form-horizontal form-row-seperated" method="post">
                <div class="form-body">

                <div class="form-group">
                    <label class="control-label col-md-3">ID</label>
                    <div class="col-md-9">
                        <input type="text" name="id" value="<?php echo (int)$type_max+1 ?>" class="form-control" ReadOnly />
                    </div>
                </div>
                    
                <div class="form-group">
                    <label class="control-label col-md-3">Title</label>
                    <div class="col-md-9">
                        <input type="text" name="title" placeholder="eg: Car" class="form-control" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Description</label>
                    <div class="col-md-9">
                        <input type="text" name="description" placeholder="" class="form-control" />
                    </div>
                </div>
                    
                <div class="form-group">
                    <label class="control-label col-md-3">Seats Count</label>
                    <div class="col-md-9">
                        <input type="text" name="seats_count" placeholder="Total no of Seats including driver seat" class="form-control" />
                    </div>
                </div>
                    
                <div class="form-group">
                    <label class="control-label col-md-3">Price Ratio</label>
                    <div class="col-md-9">
                        <input type="text" name="price_ratio" placeholder="" class="form-control" />
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


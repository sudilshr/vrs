<div class="portlet box blue">                 
    <div class="portlet-title">             
        <div class="caption">Add User</div>                  
    </div>   
    <div class="portlet-body">                     
        
        <div class="table-responsive">
            <!-- BEGIN FORM-->
            <form action="<?php echo base_url();?>dashboard/users/create" class="form-horizontal form-row-seperated" method="post">
                <div class="form-body">
                    
                <div class="form-group">
                    <label class="control-label col-md-3">ID</label>
                    <div class="col-md-9">
                        <input type="text" name="id" value="<?php echo (int)$q_users_max+1;?>" class="form-control" ReadOnly />
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Role</label>
                    <div class="col-md-9">
                        <select name="role" class="form-control">
                            <option value="admin">Admin</option>

                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3">Username</label>
                    <div class="col-md-9">
                        <input type="text" name="username" placeholder="" class="form-control" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Email</label>
                    <div class="col-md-9">
                        <input type="text" name="email" placeholder="" class="form-control" />
                    </div>
                </div>
                    
                <div class="form-group">
                    <label class="control-label col-md-3">Password</label>
                    <div class="col-md-9">
                        <input type="password" name="password" placeholder="" class="form-control" />
                    </div>
                </div>
                                 
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
				
				<input type="hidden" name="action" value="NEW"/>
            </form>
            <!-- END FORM-->  
        </div>            
        
    </div>
</div>


<?php 
	if(isset($submit_msg)){
		echo '<div class="alert alert-success"><strong>'.$submit_msg.'</strong></div>';
	}
?>
<div class="portlet box blue">                 
    
	
	<div class="portlet-title">             
        <div class="caption">Users List</div>                  
    </div>   
    <div class="portlet-body">                     
        <div class="table-toolbar">                        
            <div class="btn-group "></div>
            <div class="btn-group pull-right">                           
                <a href="<?php echo base_url(); ?>dashboard/users/add" class="btn green">                       
                    Add User <i class="icon-plus"></i>                           
                </a>                        
            </div>
        </div>
        
        <div class="table-responsive">
            <?php
            $this->load->library('table');
            $tmpl = array ( 'table_open'  => '<table class="table table-hover">' );
            $this->table->set_template($tmpl);          

            $cell_1 = array('data' => 'SN', 'width' => '5%');
            $cell_2 = array('data' => 'Role', 'width' => '20%');
            $cell_3 = array('data' => 'User', 'width' => '30%');
            $cell_4 = array('data' => 'Email', 'width' => '20%');

            $this->table->set_heading(array($cell_1,$cell_2,$cell_3,$cell_4,'','',''));
            //$this->table->add_row(array('01','BA-1-CHA-9632', 'Toyota Hiace ','Hiace','<i class="icon-large icon-pencil"></i>  Bookings','<i class="icon-large icon-edit"></i>  Edit','<i class="icon-large icon-remove"></i>  Delete'));
            foreach ($query->result() as $row) {
                
                $this->table->add_row(
                        array(
                            $row->id,
                            ucfirst($row->role), 
                            $row->username,
                            $row->email,
                            '<a href="'.base_url().'dashboard/users/edit/'.$row->id.'"><i class="icon-large icon-edit"></i>  Edit</a>',
                            '<a href="'.base_url().'dashboard/users/delete/'.$row->id.'"><i class="icon-large icon-remove"></i>  Delete</a>'
                            )                     
                    );
            }
            echo $this->table->generate();

            ?>
        </div>            
        
    </div>
</div>


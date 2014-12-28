<?php 
	if(isset($submit_msg)){
		echo '<div class="alert alert-success"><strong>'.$submit_msg.'</strong></div>';
	}
?>
<div class="portlet box blue">                 
    
	
	<div class="portlet-title">             
        <div class="caption">Vehicle List</div>                  
    </div>   
    <div class="portlet-body">                     
        <div class="table-toolbar">                        
            <div class="btn-group "></div>
            <div class="btn-group pull-right">                           
                <a href="<?php echo base_url(); ?>dashboard/vehicle/add" class="btn green">                       
                    Add Vehicle <i class="icon-plus"></i>                           
                </a>                        
            </div>
        </div>
        
        <div class="table-responsive">
            <?php
            $this->load->library('table');
            $tmpl = array ( 'table_open'  => '<table class="table table-hover">' );
            $this->table->set_template($tmpl);          

            $cell_1 = array('data' => 'SN', 'width' => '5%');
            $cell_2 = array('data' => 'Registration No', 'width' => '20%');
            $cell_3 = array('data' => 'Make & Model', 'width' => '30%');
            $cell_4 = array('data' => 'Type', 'width' => '20%');

            $this->table->set_heading(array($cell_1,$cell_2,$cell_3,$cell_4,'','',''));
            //$this->table->add_row(array('01','BA-1-CHA-9632', 'Toyota Hiace ','Hiace','<i class="icon-large icon-pencil"></i>  Bookings','<i class="icon-large icon-edit"></i>  Edit','<i class="icon-large icon-remove"></i>  Delete'));
            foreach ($query->result() as $row) {
                
                //get vehicle type title from id
                $type_query = Modules::run('type/get_where', $row->veh_type_id);
                foreach ($type_query->result() as $t_row) {
                    $type_title=$t_row->type_title;
                }
                
                //get vehicle vendor title from id
                $vendor_query = Modules::run('vendor/get_where', $row->veh_vendor_id);
                foreach ($vendor_query->result() as $v_row) {
                    $vendor_title=$v_row->vendor_title;
                }
                
                //display data
                $this->table->add_row(
                        array(
                            $row->id,
                            $row->veh_reg_no, 
                            $vendor_title .' '. $row->veh_model,
                            $type_title,
                            '<i class="icon-large icon-pencil"></i>  Bookings',
                            '<a href="'.base_url().'dashboard/vehicle/edit/'.$row->id.'"><i class="icon-large icon-edit"></i>  Edit</a>',
                            '<a href="'.base_url().'dashboard/vehicle/delete/'.$row->id.'"><i class="icon-large icon-remove"></i>  Delete</a>'
                            )
                        );
            }
            echo $this->table->generate();

            ?>
        </div>            
        
    </div>
</div>


<?php 
	if(isset($submit_msg)){
		echo '<div class="alert alert-success"><strong>'.$submit_msg.'</strong></div>';
	}
?>
<div class="portlet box blue">                 
    <div class="portlet-title">             
        <div class="caption">Vehicle Vendor List</div>                  
    </div>   
    <div class="portlet-body">                     
        <div class="table-toolbar">                        
            <div class="btn-group "></div>
            <div class="btn-group pull-right">                           
                <a href="<?php echo base_url(); ?>dashboard/vendor/add" class="btn green">                       
                    Add Vehicle Vendor <i class="icon-plus"></i>                           
                </a>                        
            </div>
        </div>
        
        <div class="table-responsive">
        <?php
        $this->load->library('table');
        $tmpl = array ( 'table_open'  => '<table class="table table-hover">' );
        $this->table->set_template($tmpl);

        //$query = $this->db->query("SELECT * FROM vrs_vehicle");

        $cell_1 = array('data' => 'SN', 'width' => '5%');
        $cell_2 = array('data' => 'Vendor Title', 'width' => '30%');
        $cell_3 = array('data' => 'Vendor Description', 'width' => '40%');

        $this->table->set_heading(array($cell_1,$cell_2,$cell_3,'',''));
               //$this->table->add_row(array('01','Car', 'Toyota Car ','<i class="icon-large icon-pencil"></i>  Bookings','<i class="icon-large icon-edit"></i>  Edit','<i class="icon-large icon-remove"></i>  Delete'));
        foreach($query->result() as $row){
        $this->table->add_row(
                array(
                    $row->id,
                    $row->vendor_title, 
                    $row->vendor_desc,
                    
                    '<a href="'.base_url().'dashboard/vendor/edit/'.$row->id.'"><i class="icon-large icon-edit"></i>  Edit</a>',
                    '<a href="'.base_url().'dashboard/vendor/delete/'.$row->id.'"><i class="icon-large icon-remove"></i>  Delete</s>'
                    )
                );
        }
        echo $this->table->generate();

        ?>

        </div>
    </div>
</div>

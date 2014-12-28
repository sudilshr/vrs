<?php 
	if(isset($submit_msg)){
		echo '<div class="alert alert-'.$alert_type.'"><strong>'.$submit_msg.'</strong></div>';
	}
?>

<div class="portlet box blue">                 
    <div class="portlet-title">             
        <div class="caption">Vehicle Type List</div>                  
    </div>   
    <div class="portlet-body">                     
        <div class="table-toolbar">                        
            <div class="btn-group "></div>
            <div class="btn-group pull-right">                           
                <a href="<?php echo base_url(); ?>dashboard/type/add" class="btn green">                       
                    Add Vehicle Type <i class="icon-plus"></i>                           
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
        $cell_2 = array('data' => 'Title', 'width' => '20%');
        $cell_3 = array('data' => 'Description', 'width' => '35%');
        $cell_4 = array('data' => 'Seats Count', 'width' => '15%');


        $this->table->set_heading(array($cell_1,$cell_2,$cell_3,$cell_4,'',''));
        //$this->table->add_row(array('01','Car', 'Toyota Car','4','<i class="icon-large icon-pencil"></i>  Bookings','<i class="icon-large icon-edit"></i>  Edit','<i class="icon-large icon-remove"></i>  Delete'));
        foreach ($query->result() as $row){
            $this->table->add_row(
                    array(
                        $row->id,
                        $row->type_title, 
                        $row->type_desc,
                        $row->seats_count,
                        '<a href="'.base_url().'dashboard/type/edit/'.$row->id.'"><i class="icon-large icon-edit"></i>  Edit</a>',
                        '<a href="'.base_url().'dashboard/type/delete/'.$row->id.'"><i class="icon-large icon-remove"></i>  Delete</a>'
                        )
                    );
        }
        echo $this->table->generate();

        ?>
        </div>
    </div>
</div>

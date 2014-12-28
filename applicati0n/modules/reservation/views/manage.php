<?php 
	if(isset($submit_msg)){
		echo '<div class="alert alert-success"><strong>'.$submit_msg.'</strong></div>';
	}
?>

<div class="portlet box blue">                 
    
	
	<div class="portlet-title">             
        <div class="caption">Reservation List</div>                  
    </div>   
    <div class="portlet-body">                     
        <!--
        <div class="table-toolbar">                        
            <div class="btn-group "></div>
            <div class="btn-group pull-right">                           
                <a href="<?php echo base_url(); ?>dashboard/reservation/add" class="btn green">                       
                    Add Reservation <i class="icon-plus"></i>                           
                </a>                        
            </div>
        </div>
        -->
        <div class="table-responsive">
            <?php
            $this->load->library('table');
            $tmpl = array ( 'table_open'  => '<table class="table table-hover">' );
            $this->table->set_template($tmpl);          

            $cell_1 = array('data' => 'SN', 'width' => '3%');
            $cell_2 = array('data' => 'From', 'width' => '10%');
            $cell_3 = array('data' => 'To', 'width' => '10%');
            $cell_4 = array('data' => 'Vehicle', 'width' => '15%');
            $cell_5 = array('data' => 'Pickup', 'width' => '15%');
            $cell_6 = array('data' => 'Destination', 'width' => '15%');
            $cell_7 = array('data' => 'Status', 'width' => '10%');

            $this->table->set_heading(array($cell_1,$cell_2,$cell_3,$cell_4,$cell_5,$cell_6,$cell_7,'','',''));
           
            foreach ($query->result() as $row) {
                
                
            
                //get vehicle type & vendor id
                $vehicle_query = Modules::run('vehicle/get_where', $row->vehicle_id);
                foreach ($vehicle_query->result() as $v_row) {
                    $vendor_id = $v_row->veh_vendor_id;
                    $type_id=$v_row->veh_type_id;
                    $veh_model = $v_row->veh_model;
                }
                
                //get vehicle type title from id
                $type_query = Modules::run('type/get_where', $type_id);
                foreach ($type_query->result() as $t_row) {
                    $type_title=$t_row->type_title;
                }
                
                //get vehicle vendor title from id
                $vendor_query = Modules::run('vendor/get_where', $vendor_id);
                foreach ($vendor_query->result() as $v_row) {
                    $vendor_title=$v_row->vendor_title;
                }
                
                //get pickup location title from id
                $pickup_query = Modules::run('location/get_where', $row->pickup_location_id);
                foreach ($pickup_query->result() as $v_row) {
                    $pickup_title=$v_row->name;
                }
                
                //get destination location title from id
                $destination_query = Modules::run('location/get_where', $row->destination_location_id);
                foreach ($destination_query->result() as $v_row) {
                    $destination_title=$v_row->name;
                }
                
                
                
                //display data
                $this->table->add_row(
                        array(
                            $row->id,
                            $row->from_date, 
                            $row->to_date,
                            $type_title.' '.$vendor_title.' '.$veh_model,
                            $pickup_title,
                            $destination_title,
                            $row->booking_status,
                            '<a href="'.base_url().'dashboard/reservation/confirm/'.$row->id.'"><i class="icon-large icon-ok"></i>  Confirm</a>',
                            '<a href="'.base_url().'dashboard/reservation/details/'.$row->id.'"><i class="icon-large icon-info"></i>  Details</a>',
                            '<a href="'.base_url().'dashboard/reservation/delete/'.$row->id.'"><i class="icon-large icon-remove"></i>  Delete</a>'
                            )
                        );
            }
            echo $this->table->generate();

            ?>
        </div>            
        
    </div>
</div>


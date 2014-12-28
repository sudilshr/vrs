<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reservation extends MX_Controller{
    function __construct() {
        parent::__construct();

		$this->load->module('template');
		//Modules::run('security/make_sure_is_admin');
    }


    public function index(){
        $data['view_file']="step_1";
        $data['loc_name'] = Modules::run('location/get','id');
        $data['v_type_name'] = Modules::run('type/get','id');
        $data['query'] = $this->get('id'); 
        $data['title'] = "Reservation";
        $data['active_menu'] = "reservation"; 
        $this->template->public_inner_page($data);
    }
    
    public function step(){
	$permalink = $this->uri->segment(3);
        
        if ($permalink==""){
            $permalink="1";
        }
        
        if($permalink=="1"){
                $data['view_file']="step_1";                        
                
        } elseif ($permalink=="2"){
            if ($_SERVER['REQUEST_METHOD']=="POST"){
                $veh_type_id = $_POST['vehicle_type'];
                $data['q_v_filter'] = Modules::run('vehicle/get_where_custom','veh_type_id',$veh_type_id);    
                $data['view_file']="step_2";
            } else {
                redirect('reservation/step/1');
                $data['view_file']="step_1";
            }                           
        } elseif ($permalink=="3"){
            if ($_SERVER['REQUEST_METHOD']=="POST"){
                $data['view_file']="step_3";
            } else {
                redirect('reservation/step/1');
            }
        } elseif ($permalink=="4"){
            if ($_SERVER['REQUEST_METHOD']=="POST"){
                $r_data = $this->get_data_from_post();
                $this->create_personal_details();
                
                //get inserted personal id
                $this->load->module("personal");               
                $r_data['personal_details_id'] = ($this->personal->db->insert_id());
                
                $this->_insert($r_data);
                
                $data['msg'] = "";
                $data['view_file']="step_4";
            } else {
                redirect('reservation/step/1');
            }
        }
        
        $data['q_vehicle'] = Modules::run('vehicle/get','id');    
        $data['q_type'] = Modules::run('type/type','id');
        $data['q_vendor'] = Modules::run('type/vendor','id');
        $data['loc_name'] = Modules::run('location/get','id');
        $data['v_type_name'] = Modules::run('type/get','id');
        $data['query'] = $this->get('id'); 
        $data['title'] = "Reservation";
        $data['active_menu'] = "reservation"; 
        $this->template->public_inner_page($data);
    }
    
    function get_data_from_post () {
        $data['from_date'] = $_POST['start_date_time'];
        $data['to_date'] = $_POST['drop_off_date_time'];
        $data['vehicle_id'] = $_POST['vehicle_id'];
        $data['pickup_location_id'] = $_POST['pickup_location'];
        $data['destination_location_id'] = $_POST['drop_off_location'];
        $data['payment_mode_id'] = $_POST['payment_mode'];
        $data['total'] = $_POST['total_price'];
        $data['tax'] = $_POST['tax_amount'];
        $data['booking_status'] = $_POST['booking_status'];
        
        return $data;	                
    }
    
    public function create_personal_details(){            
       
        $data['linked_user_id'] = "";
        $data['name'] = $_POST['name'];
        $data['phone'] = $_POST['phone'];
        $data['email'] = $_POST['email'];
        
        //$this->_insert($data);
        Modules::run('personal/_insert',$data);
        //$data1['personal_details_id'] = $this->db->insert_id();
        //return $data1;
    }
        
    public function manage(){
		
        $data['query'] = $this->get('id'); 
        $data['module']="reservation";
        $data['view_file']="manage";
        $this->template->admin($data);
    }
    

    /*
    public function add(){
        
        $data['q_reservation_max'] = $this->get_max();
        //$data['q_vendor']=Modules::run('vendor/get', 'id');
        //$data['q_type'] = Modules::run('type/get','id');
        $data['module']="reservation";
        $data['view_file']="add";

        $this->template->admin($data);
    }
	
     
    public function edit(){
                            
        $update_id = $this->uri->segment(4);
        //$submit = $this->input->post('submit', TRUE);

        if (is_numeric($update_id)) {
            $query = $this->get_where($update_id);
		foreach ($query->result() as $row) { 
                    $data['veh_type_id'] = $row->veh_type_id;
                    $data['veh_vendor_id'] = $row->veh_vendor_id;
                    $data['veh_model'] = $row->veh_model;
                    $data['veh_reg_no'] = $row->veh_reg_no;
                    $data['veh_fuel_type'] = $row->veh_fuel_type;
                    $data['veh_mileage'] = $row->veh_mileage;
                }
                
        }
        $data['q_vendor'] = Modules::run('vendor/get', 'id');
        $data['q_type']   = Modules::run('type/get','id');
        $data['update_id'] = $update_id;
        $data['module'] = "reservation";
        $data['view_file'] = "edit";      
        $this->template->admin($data);
    }
    */
    public function confirm(){
        $confirm_id = $this->uri->segment(4);
        $data['booking_status'] = "CONFIRMED";
        $this->_update($confirm_id, $data);
        $data['alert_type'] = "info";
        $data['submit_msg'] = "Booking confirmed [ID = ".$confirm_id."]";
                    
        $data['query'] = $this->get('id');
        $data['module']="reservation";
        $data['view_file']="manage";


        $this->template->admin($data);
            
    }
    
    public function details(){
                            
        $details_id = $this->uri->segment(4);
        
        if (is_numeric($details_id)) {
            $query = $this->get_where($details_id);
		foreach ($query->result() as $row) { 
                    $data['from_date'] = $row->from_date;
                    $data['to_date'] = $row->to_date;
                    $data['vehicle_id'] = $row->vehicle_id;
                    $data['pickup_location_id'] = $row->pickup_location_id;
                    $data['destination_location_id'] = $row->destination_location_id;
                    $data['payment_mode_id'] = $row->payment_mode_id;
                    $data['total_charge'] = $row->total;
                    $data['advance'] = $row->advance;
                    $data['booking_status'] = $row->booking_status;
                    
                    
                    //get personal details
                    $personal_query = Modules::run('personal/get_where', $row->personal_details_id);
                    foreach ($personal_query->result() as $p_row) {
                        $data['p_name']=$p_row->name;
                    }
                    
                    
                    $vehicle_query = Modules::run('vehicle/get_where', $row->vehicle_id);
                    foreach ($vehicle_query->result() as $v_row) {
                        $vendor_id = $v_row->veh_vendor_id;
                        $type_id=$v_row->veh_type_id;
                        $data['veh_model'] = $v_row->veh_model;
                    }

                    //get vehicle type title from id
                    $type_query = Modules::run('type/get_where', $type_id);
                    foreach ($type_query->result() as $t_row) {
                        $data['type_title']=$t_row->type_title;
                    }

                    //get vehicle vendor title from id
                    $vendor_query = Modules::run('vendor/get_where', $vendor_id);
                    foreach ($vendor_query->result() as $v_row) {
                        $data['vendor_title']=$v_row->vendor_title;
                    }

                    //get pickup location title from id
                    $pickup_query = Modules::run('location/get_where', $row->pickup_location_id);
                    foreach ($pickup_query->result() as $v_row) {
                        $data['pickup_title']=$v_row->name;
                    }

                    //get destination location title from id
                    $destination_query = Modules::run('location/get_where', $row->destination_location_id);
                    foreach ($destination_query->result() as $v_row) {
                        $data['destination_title']=$v_row->name;
                    }  
                    
                    //get payment mode
                    //$destination_query = Modules::run('payment/get_where', $row->payment->mode_id);
                    //foreach ($destination_query->result() as $v_row) {
                    //    $payment_title=$v_row->name;
                    //}  
                    
                    
                }
                
        }
        
                
         
        
        $data['details_id'] = $details_id;
        $data['module'] = "reservation";
        $data['view_file'] = "details";      
        $this->template->admin($data);
    }
    
    public function delete(){
        $delete_id = $this->uri->segment(4);
        
        if($delete_id!=""){
            $data['disabled'] = "TRUE";
            $this->_update($delete_id, $data);
            $data['alert_type'] = "danger";
            $data['submit_msg'] = "Information deleted successfully [ID = ".$delete_id."]";
        }
        

        $data['query'] = $this->get('id');
        $data['module']="vehicle";
        $data['view_file']="manage";
        

        $this->template->admin($data);
    }
    
    
    public function submit(){
            if($_SERVER['REQUEST_METHOD']=='POST'){
                    $action = $_POST['action'];

                    $data['veh_type_id'] = $_POST['v_type'];
                    $data['veh_vendor_id'] = $_POST['v_vendor'];
                    $data['veh_model'] = $_POST['v_model'];
                    $data['veh_reg_no'] = $_POST['v_reg_no'];
                    $data['veh_fuel_type'] = $_POST['v_fuel_type'];
                    $data['veh_mileage'] = $_POST['v_mileage'];
                    if($action=='NEW'){
                            $this->_insert($data);
                            $data['alert_type'] = "success";
                            $data['submit_msg'] = "Information Saved Successfully";
                    }
                    elseif($action=='EDIT'){
                            $data['id'] = $_POST['id'];
                            $this->_update($data['id'], $data);
                            $data['alert_type'] = "info";
                            $data['submit_msg'] = "Information Modified Successfully [ID = ".$data['id']."]";
                    }
                    $data['query'] = $this->get('id');
                    $data['module']="reservation";
                    $data['view_file']="manage";
                    

                    $this->template->admin($data);
            }
    }
    

	
    // DATABASE METHODS

  
    
    function get ($order_by, $status = 1) {
            $this->load->model('mdl_reservation');
            $query = $this->mdl_reservation->get($order_by, $status);
            return $query;
    }

    function get_with_limit ($limit, $offset, $order_by, $status = 1) {
            $this->load->model('mdl_reservation');
            $query = $this->mdl_reservation->get_with_limit($limit, $offset, $order_by, $status);
            return $query;
    }

    function get_where($id, $status = 1) {
            $this->load->model('mdl_reservation');
            $query = $this->mdl_reservation->get_where($id, $status);
            return $query;
    }

    function get_where_in($ids, $status = 1) {
            $this->load->model('mdl_reservation');
            $query = $this->mdl_reservation->get_where_in($ids, $status);
            return $query;
    }

    function get_where_custom ($col, $value, $status = 1) {
            $this->load->model('mdl_reservation');
            $query = $this->mdl_reservation->get_where_custom($col, $value, $status);
            return $query;
    }

    function _insert ($data, $status = 1) {
            $this->load->model('mdl_reservation');
            $query = $this->mdl_reservation->_insert($data, $status);
            return $query;
    }

    function _update ($id, $data, $status = 1) {
            $this->load->model('mdl_reservation');
            $query = $this->mdl_reservation->_update($id, $data, $status);
            return $query;
    }

    function _delete ($id, $status = 1) {
            $this->load->model('mdl_reservation');
            $query = $this->mdl_reservation->_delete($id, $status);
            return $query;
    }

    function count_where ($column, $value, $status = 1) {
            $this->load->model('mdl_reservation');
            $query = $this->mdl_reservation->count_where($column, $value, $status);
            return $query;
    }

    function count_all($status = 1) {
            $this->load->model('mdl_reservation');
            $query = $this->mdl_reservation->count_all($status);
            return $query;
    }

    function get_max ($status = 1) {
            $this->load->model('mdl_reservation');
            $query = $this->mdl_reservation->get_max($status);
            return $query;
    }

    function _custom_query ($mysql_query) {
            $this->load->model('mdl_reservation');
            $query = $this->mdl_reservation->_custom_query($mysql_query);
            return $query;
    }

}


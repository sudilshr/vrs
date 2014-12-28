<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Vehicle extends MX_Controller{
    function __construct() {
        parent::__construct();
		$this->load->module('template');
		//Modules::run('security/make_sure_is_admin');
    }

    public function index(){
		
        $data['query'] = $this->get('id'); 
        //$data['q_vendor'] = Modules::run('vendor/get_where', 'id');
        //$data['q_type']   = Modules::run('type/get_where','id');
        $data['q_vehicle'] = Modules::run('vehicle/get','id');    
        $data['q_type'] = Modules::run('type/type','id');
        $data['q_vendor'] = Modules::run('type/vendor','id');
        $data['loc_name'] = Modules::run('location/get','id');
        $data['v_type_name'] = Modules::run('type/get','id');
        $data['query'] = $this->get('id'); 
        $data['title'] = "Vehicle";
        $data['active_menu'] = "vehicles"; 
        $data['module']="vehicle";
        $data['view_file']="vehicle";
        $this->template->public_inner_page($data);
    }
    
    public function manage(){
		
        $data['query'] = $this->get('id'); 
        $data['q_vendor'] = Modules::run('vendor/get_where', 'id');
        $data['q_type']   = Modules::run('type/get_where','id');
        $data['module']="vehicle";
        $data['view_file']="manage";
        $this->template->admin($data);
    }
    


    public function add(){
        
        $data['q_vehicle_max'] = $this->get_max();
        $data['q_vendor']=Modules::run('vendor/get', 'id');
        $data['q_type'] = Modules::run('type/get','id');
        $data['module']="vehicle";
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
                    $data['veh_img_url'] = $row->veh_img_url;
                }
                
        }
        $data['q_vendor'] = Modules::run('vendor/get', 'id');
        $data['q_type']   = Modules::run('type/get','id');
        $data['update_id'] = $update_id;
        $data['module'] = "vehicle";
        $data['view_file'] = "edit";      
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
                    $data['veh_img_url'] = $_POST['v_img_url'];
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
                    $data['module']="vehicle";
                    $data['view_file']="manage";
                    

                    $this->template->admin($data);
            }
    }
    

	
    // DATABASE METHODS

  
    
    function get ($order_by, $status = 1) {
            $this->load->model('mdl_vehicle');
            $query = $this->mdl_vehicle->get($order_by, $status);
            return $query;
    }

    function get_with_limit ($limit, $offset, $order_by, $status = 1) {
            $this->load->model('mdl_vehicle');
            $query = $this->mdl_vehicle->get_with_limit($limit, $offset, $order_by, $status);
            return $query;
    }

    function get_where($id, $status = 1) {
            $this->load->model('mdl_vehicle');
            $query = $this->mdl_vehicle->get_where($id, $status);
            return $query;
    }

    function get_where_in($ids, $status = 1) {
            $this->load->model('mdl_vehicle');
            $query = $this->mdl_vehicle->get_where_in($ids, $status);
            return $query;
    }

    function get_where_custom ($col, $value, $status = 1) {
            $this->load->model('mdl_vehicle');
            $query = $this->mdl_vehicle->get_where_custom($col, $value, $status);
            return $query;
    }

    function _insert ($data, $status = 1) {
            $this->load->model('mdl_vehicle');
            $query = $this->mdl_vehicle->_insert($data, $status);
            return $query;
    }

    function _update ($id, $data, $status = 1) {
            $this->load->model('mdl_vehicle');
            $query = $this->mdl_vehicle->_update($id, $data, $status);
            return $query;
    }

    function _delete ($id, $status = 1) {
            $this->load->model('mdl_vehicle');
            $query = $this->mdl_vehicle->_delete($id, $status);
            return $query;
    }

    function count_where ($column, $value, $status = 1) {
            $this->load->model('mdl_vehicle');
            $query = $this->mdl_vehicle->count_where($column, $value, $status);
            return $query;
    }

    function count_all($status = 1) {
            $this->load->model('mdl_vehicle');
            $query = $this->mdl_vehicle->count_all($status);
            return $query;
    }

    function get_max ($status = 1) {
            $this->load->model('mdl_vehicle');
            $query = $this->mdl_vehicle->get_max($status);
            return $query;
    }

    function _custom_query ($mysql_query) {
            $this->load->model('mdl_vehicle');
            $query = $this->mdl_vehicle->_custom_query($mysql_query);
            return $query;
    }

}


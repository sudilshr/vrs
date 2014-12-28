<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Location extends MX_Controller{
    function __construct() {
        parent::__construct();
		$this->load->module('template');
		//Modules::run('security/make_sure_is_admin');
    }

	
    public function manage(){
		
        $data['query'] = $this->get('id'); 
        $data['module']="location";
        $data['view_file']="manage";
        $this->template->admin($data);
    }
    


    public function add(){
        
        $data['q_loc_max'] = $this->get_max();
        $data['loc_name'] = Modules::run('location/get','id');
        $data['module']="location";
        $data['view_file']="add";

        $this->template->admin($data);
    }
	
     
    public function edit(){
                            
        $update_id = $this->uri->segment(4);
       
        //$submit = $this->input->post('submit', TRUE);

        if (is_numeric($update_id)) {
            $query = $this->get_where($update_id);
		foreach ($query->result() as $row) { 
                    $data['loc_name'] = $row->name;
                    $data['loc_street'] = $row->street;
                    $data['loc_city'] = $row->city;
                    $data['loc_district'] = $row->district;
                    $data['loc_zone'] = $row->zone;
                    $data['loc_start_location_id'] = $row->start_location_id;
                    $data['loc_total_km'] = $row->total_km_from_start;
                    $data['loc_road_type_id'] = $row->road_type_id;
                    $data['loc_default_rate'] = $row->default_rate;
                }
                
        }
        $data['loc_name_list'] = Modules::run('location/get', 'id');
        $data['update_id'] = $update_id;
        $data['module'] = "location";
        $data['view_file'] = "edit";      
        $this->template->admin($data);
    }
    
    public function details(){
                            
        $update_id = $this->uri->segment(4);
        
        if (is_numeric($update_id)) {
            $query = $this->get_where($update_id);
		foreach ($query->result() as $row) { 
                   
                    $data['loc_name'] = $row->name;
                    $data['loc_street'] = $row->street;
                    $data['loc_city'] = $row->city;
                    $data['loc_district'] = $row->district;
                    $data['loc_zone'] = $row->zone;
                    $data['loc_start_location_id'] = $row->start_location_id;
                    $data['loc_total_km'] = $row->total_km_from_start;
                    $data['loc_road_type_id'] = $row->road_type_id;
                    $data['loc_default_rate'] = $row->default_rate;
                }
                
        }
        $data['loc_name_list'] = Modules::run('location/get', 'id');
        $data['update_id'] = $update_id;
        $data['module'] = "location";
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
        $data['module']="location";
        $data['view_file']="manage";

        $this->template->admin($data);
    }
    
    
    public function submit(){
            if($_SERVER['REQUEST_METHOD']=='POST'){
                    $action = $_POST['action'];
                    $data['name'] = $_POST['loc_name'];
                    $data['street'] = $_POST['loc_street'];
                    $data['city'] = $_POST['loc_city'];
                    $data['district'] = $_POST['loc_district'];
                    $data['zone'] = $_POST['loc_zone'];
                    $data['start_location_id'] = $_POST['loc_start_location'];
                    $data['total_km_from_start'] = $_POST['loc_total_km'];
                    $data['road_type_id'] = $_POST['loc_road_type'];
                    $data['default_rate'] = $_POST['loc_default_rate'];
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
                    $data['module']="location";
                    $data['view_file']="manage";
                    

                    $this->template->admin($data);
            }
    }
    

	
    // DATABASE METHODS
   
    function get ($order_by, $status = 1) {
            $this->load->model('mdl_location');
            $query = $this->mdl_location->get($order_by, $status);
            return $query;
    }

    function get_with_limit ($limit, $offset, $order_by, $status = 1) {
            $this->load->model('mdl_location');
            $query = $this->mdl_location->get_with_limit($limit, $offset, $order_by, $status);
            return $query;
    }

    function get_where($id, $status = 1) {
            $this->load->model('mdl_location');
            $query = $this->mdl_location->get_where($id, $status);
            return $query;
    }

    function get_where_in($ids, $status = 1) {
            $this->load->model('mdl_location');
            $query = $this->mdl_location->get_where_in($ids, $status);
            return $query;
    }

    function get_where_custom ($col, $value, $status = 1) {
            $this->load->model('mdl_location');
            $query = $this->mdl_location->get_where_custom($col, $value, $status);
            return $query;
    }

    function _insert ($data, $status = 1) {
            $this->load->model('mdl_location');
            $query = $this->mdl_location->_insert($data, $status);
            return $query;
    }

    function _update ($id, $data, $status = 1) {
            $this->load->model('mdl_location');
            $query = $this->mdl_location->_update($id, $data, $status);
            return $query;
    }

    function _delete ($id, $status = 1) {
            $this->load->model('mdl_location');
            $query = $this->mdl_location->_delete($id, $status);
            return $query;
    }

    function count_where ($column, $value, $status = 1) {
            $this->load->model('mdl_location');
            $query = $this->mdl_location->count_where($column, $value, $status);
            return $query;
    }

    function count_all($status = 1) {
            $this->load->model('mdl_location');
            $query = $this->mdl_location->count_all($status);
            return $query;
    }

    function get_max ($status = 1) {
            $this->load->model('mdl_location');
            $query = $this->mdl_location->get_max($status);
            return $query;
    }

    function _custom_query ($mysql_query) {
            $this->load->model('mdl_location');
            $query = $this->mdl_location->_custom_query($mysql_query);
            return $query;
    }

}


<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Settings extends MX_Controller{
    function __construct() {
        parent::__construct();
		$this->load->module('template');
		//Modules::run('security/make_sure_is_admin');
    }

	
    public function manage(){
		
        $data['query'] = $this->get('id'); 
        //$data['q_vendor'] = Modules::run('vendor/get_where', 'id');
        //$data['q_type']   = Modules::run('type/get_where','id');
        $data['module']="settings";
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
                    $data['module']="vehicle";
                    $data['view_file']="manage";
                    

                    $this->template->admin($data);
            }
    }
    

	
    // DATABASE METHODS
   
    function get ($order_by, $status = 1) {
            $this->load->model('mdl_settings');
            $query = $this->mdl_settings->get($order_by, $status);
            return $query;
    }

    function get_with_limit ($limit, $offset, $order_by, $status = 1) {
            $this->load->model('mdl_settings');
            $query = $this->mdl_settings->get_with_limit($limit, $offset, $order_by, $status);
            return $query;
    }

    function get_where($id, $status = 1) {
            $this->load->model('mdl_settings');
            $query = $this->mdl_settings->get_where($id, $status);
            return $query;
    }

    function get_where_in($ids, $status = 1) {
            $this->load->model('mdl_settings');
            $query = $this->mdl_settings->get_where_in($ids, $status);
            return $query;
    }

    function get_where_custom ($col, $value, $status = 1) {
            $this->load->model('mdl_settings');
            $query = $this->mdl_settings->get_where_custom($col, $value, $status);
            return $query;
    }

    function _insert ($data, $status = 1) {
            $this->load->model('mdl_settings');
            $query = $this->mdl_settings->_insert($data, $status);
            return $query;
    }

    function _update ($id, $data, $status = 1) {
            $this->load->model('mdl_settings');
            $query = $this->mdl_settings->_update($id, $data, $status);
            return $query;
    }

    function _delete ($id, $status = 1) {
            $this->load->model('mdl_settings');
            $query = $this->mdl_settings->_delete($id, $status);
            return $query;
    }

    function count_where ($column, $value, $status = 1) {
            $this->load->model('mdl_settings');
            $query = $this->mdl_settings->count_where($column, $value, $status);
            return $query;
    }

    function count_all($status = 1) {
            $this->load->model('mdl_settings');
            $query = $this->mdl_settings->count_all($status);
            return $query;
    }

    function get_max ($status = 1) {
            $this->load->model('mdl_settings');
            $query = $this->mdl_settings->get_max($status);
            return $query;
    }

    function _custom_query ($mysql_query) {
            $this->load->model('mdl_settings');
            $query = $this->mdl_settings->_custom_query($mysql_query);
            return $query;
    }

}


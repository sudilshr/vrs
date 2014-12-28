<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Type extends MX_Controller{
    function __construct() {
        parent::__construct();
        $this->load->module('template');

    }

	
    public function manage(){
        //$data['tabs_view']=Modules::run('tabs');
        $data['query'] = $this->get('id');
        $data['module']="type";
        $data['view_file']="manage";

        $this->template->admin($data);
    }
    
    public function add(){
        $data['type_max'] = $this->get_max();
        $data['module']="type";	        
        $data['view_file']="add";			        

        $this->template->admin($data);
    }
     
    public function edit(){
                            
        $update_id = $this->uri->segment(4);

        if (is_numeric($update_id)) {
            $query = $this->get_where($update_id);
		foreach ($query->result() as $row) { 
                    $data['type_title'] = $row->type_title;
                    $data['type_desc'] = $row->type_desc;
                    $data['seats_count'] = $row->seats_count;
                    $data['price_rate'] = $row->price_rate_ratio;
                }
        }
        
        $data['update_id'] = $update_id;
        $data['module'] = "type";
        $data['view_file'] = "edit";      
        $this->template->admin($data);
    }
    
    public function delete(){
        $delete_id = $this->uri->segment(4);
        
        if($delete_id!=""){
            $data['disabled'] = "TRUE";
            $this->_update($delete_id, $data);
            $data['alert_type'] = "danger";
            $data['submit_msg'] = "Vehicle Type Information Deleted Successfully [ID = ".$delete_id."]";
        }
        

        $data['query'] = $this->get('id');
        $data['module']="type";
        $data['view_file']="manage";
        

        $this->template->admin($data);
    }
    
    public function submit(){
            if($_SERVER['REQUEST_METHOD']=='POST'){
                    $action = $_POST['action'];

                    $data['type_title'] = $_POST['title'];
                    $data['type_desc'] = $_POST['description'];
                    $data['seats_count'] = $_POST['seats_count'];
                    $data['price_rate_ratio'] = $_POST['price_ratio'];
                    if($action=='NEW'){
                            $this->_insert($data);
                            $data['alert_type'] = "success";
                            $data['submit_msg'] = "Vehicle Type Information Saved Successfully";
                    }
                    else if($action=='EDIT'){
                            $data['id'] = $_POST['id'];
                            $this->_update($data['id'], $data);
                            $data['alert_type'] = "info";
                            $data['submit_msg'] = "Vehicle Type Information Modified Successfully [ID = ".$data['id']."]";
                    }
                    $data['query'] = $this->get('id');
                    $data['module']="type";
                    $data['view_file']="manage";

                    $this->template->admin($data);
            }
    }
    
    // DATABASE METHODS


	
    function get ($order_by, $status = 1) {
            $this->load->model('mdl_type');
            $query = $this->mdl_type->get($order_by, $status);
            return $query;
    }

    function get_with_limit ($limit, $offset, $order_by, $status = 1) {
            $this->load->model('mdl_type');
            $query = $this->mdl_type->get_with_limit($limit, $offset, $order_by, $status);
            return $query;
    }

    function get_where($id, $status = 1) {
            $this->load->model('mdl_type');
            $query = $this->mdl_type->get_where($id, $status);
            return $query;
    }

    function get_where_in($ids, $status = 1) {
            $this->load->model('mdl_type');
            $query = $this->mdl_type->get_where_in($ids, $status);
            return $query;
    }

    function get_where_custom ($col, $value, $status = 1) {
            $this->load->model('mdl_type');
            $query = $this->mdl_type->get_where_custom($col, $value, $status);
            return $query;
    }

    function _insert ($data, $status = 1) {
            $this->load->model('mdl_type');
            $query = $this->mdl_type->_insert($data, $status);
            return $query;
    }

    function _update ($id, $data, $status = 1) {
            $this->load->model('mdl_type');
            $query = $this->mdl_type->_update($id, $data, $status);
            return $query;
    }

    function _delete ($id, $status = 1) {
            $this->load->model('mdl_type');
            $query = $this->mdl_type->_delete($id, $status);
            return $query;
    }

    function count_where ($column, $value, $status = 1) {
            $this->load->model('mdl_type');
            $query = $this->mdl_type->count_where($column, $value, $status);
            return $query;
    }

    function count_all($status = 1) {
            $this->load->model('mdl_type');
            $query = $this->mdl_type->count_all($status);
            return $query;
    }

    function get_max ($status = 1) {
            $this->load->model('mdl_type');
            $query = $this->mdl_type->get_max($status);
            return $query;
    }

    function _custom_query ($mysql_query) {
            $this->load->model('mdl_type');
            $query = $this->mdl_type->_custom_query($mysql_query);
            return $query;
    }	


	
}


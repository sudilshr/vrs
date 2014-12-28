<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Vendor extends MX_Controller{
    function __construct() {
        parent::__construct();
        $this->load->module('template');

    }

	
    public function manage(){
        //$data['tabs_view']=Modules::run('tabs');
        $data['query'] = $this->get('id');
        $data['module']="vendor";
        $data['view_file']="manage";
        $this->template->admin($data);
    }

     
    public function add(){
        //$data['tabs_view']=Modules::run('tabs');
        $data['vendor_max_id'] = $this->get_max();
        $data['module']="vendor";
        $data['view_file']="add";
        $this->template->admin($data);
    }
     
    public function edit(){
                            
        $update_id = $this->uri->segment(4);

        if (is_numeric($update_id)) {
            $query = $this->get_where($update_id);
		foreach ($query->result() as $row) { 
                    $data['vendor_title'] = $row->vendor_title;
                    $data['vendor_desc'] = $row->vendor_desc;
                }
        }
        
        $data['update_id'] = $update_id;
        $data['module'] = "vendor";
        $data['view_file'] = "edit";      
        $this->template->admin($data);
    }
    
    public function delete(){
        $delete_id = $this->uri->segment(4);
        
        if($delete_id!=""){
            $data['disabled'] = "TRUE";
            $this->_update($delete_id, $data);
            $data['alert_type'] = "danger";
            $data['submit_msg'] = "Vendor Information Deleted Successfully [ID = ".$delete_id."]";
        }
        

        $data['query'] = $this->get('id');
        $data['module']="vendor";
        $data['view_file']="manage";
        

        $this->template->admin($data);
    }
	
    public function submit(){
            if($_SERVER['REQUEST_METHOD']=='POST'){
                    $action = $_POST['action'];

                    $data['vendor_title'] = $_POST['title'];
                    $data['vendor_desc'] = $_POST['description'];
                    if($action=='NEW'){
                            $this->_insert($data);
                            $data['alert_type'] = "info";
                            $data['submit_msg'] = "Vendor Information Saved Successfully";
                    }
                    else if($action=='EDIT'){
                            $data['id'] = $_POST['id'];
                            $this->_update($data['id'], $data);
                            $data['alert_type'] = "success";
                            $data['submit_msg'] = "Vendor Information Modified Successfully [ID = ".$data['id']."]";
                    }
                    $data['query'] = $this->get('id');
                    $data['module']="vendor";
                    $data['view_file']="manage";
                    

                    $this->template->admin($data);
            }
    }
 // DATABASE METHODS

    function get_vendor_title($id) {
            $this->load->model('mdl_vendor');
            $query = $this->mdl_vendor->get_where($id);
            $res=$query->result;
            return $res->vendor_title;
    }
	
    function get ($order_by, $status = 1) {
            $this->load->model('mdl_vendor');
            $query = $this->mdl_vendor->get($order_by, $status);
            return $query;
    }

    function get_with_limit ($limit, $offset, $order_by, $status = 1) {
            $this->load->model('mdl_vendor');
            $query = $this->mdl_vendor->get_with_limit($limit, $offset, $order_by, $status);
            return $query;
    }

    function get_where($id, $status = 1) {
            $this->load->model('mdl_vendor');
            $query = $this->mdl_vendor->get_where($id, $status);
            return $query;
    }

    function get_where_in($ids, $status = 1) {
            $this->load->model('mdl_vendor');
            $query = $this->mdl_vendor->get_where_in($ids, $status);
            return $query;
    }

    function get_where_custom ($col, $value, $status = 1) {
            $this->load->model('mdl_vendor');
            $query = $this->mdl_vendor->get_where_custom($col, $value, $status);
            return $query;
    }

    function _insert ($data, $status = 1) {
            $this->load->model('mdl_vendor');
            $query = $this->mdl_vendor->_insert($data, $status);
            return $query;
    }

    function _update ($id, $data, $status = 1) {
            $this->load->model('mdl_vendor');
            $query = $this->mdl_vendor->_update($id, $data, $status);
            return $query;
    }

    function _delete ($id, $status = 1) {
            $this->load->model('mdl_vendor');
            $query = $this->mdl_vendor->_delete($id, $status);
            return $query;
    }

    function count_where ($column, $value, $status = 1) {
            $this->load->model('mdl_vendor');
            $query = $this->mdl_vendor->count_where($column, $value, $status);
            return $query;
    }

    function count_all($status = 1) {
            $this->load->model('mdl_vendor');
            $query = $this->mdl_vendor->count_all($status);
            return $query;
    }

    function get_max ($status = 1) {
            $this->load->model('mdl_vendor');
            $query = $this->mdl_vendor->get_max($status);
            return $query;
    }

    function _custom_query ($mysql_query) {
            $this->load->model('mdl_vendor');
            $query = $this->mdl_vendor->_custom_query($mysql_query);
            return $query;
    }	
}


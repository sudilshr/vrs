<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Personal extends MX_Controller{
    function __construct() {
        parent::__construct();
		//Modules::run('security/make_sure_is_admin');
    }

    // DATABASE METHODS
   
    function get ($order_by, $status = 1) {
            $this->load->model('mdl_personal');
            $query = $this->mdl_personal->get($order_by, $status);
            return $query;
    }

    function get_with_limit ($limit, $offset, $order_by, $status = 1) {
            $this->load->model('mdl_personal');
            $query = $this->mdl_personal->get_with_limit($limit, $offset, $order_by, $status);
            return $query;
    }

    function get_where($id, $status = 1) {
            $this->load->model('mdl_personal');
            $query = $this->mdl_personal->get_where($id, $status);
            return $query;
    }

    function get_where_in($ids, $status = 1) {
            $this->load->model('mdl_personal');
            $query = $this->mdl_personal->get_where_in($ids, $status);
            return $query;
    }

    function get_where_custom ($col, $value, $status = 1) {
            $this->load->model('mdl_personal');
            $query = $this->mdl_personal->get_where_custom($col, $value, $status);
            return $query;
    }

    function _insert ($data, $status = 1) {
            $this->load->model('mdl_personal');
            $query = $this->mdl_personal->_insert($data, $status);
            return $query;
    }

    function _update ($id, $data, $status = 1) {
            $this->load->model('mdl_personal');
            $query = $this->mdl_personal->_update($id, $data, $status);
            return $query;
    }

    function _delete ($id, $status = 1) {
            $this->load->model('mdl_personal');
            $query = $this->mdl_personal->_delete($id, $status);
            return $query;
    }

    function count_where ($column, $value, $status = 1) {
            $this->load->model('mdl_personal');
            $query = $this->mdl_personal->count_where($column, $value, $status);
            return $query;
    }

    function count_all($status = 1) {
            $this->load->model('mdl_personal');
            $query = $this->mdl_personal->count_all($status);
            return $query;
    }

    function get_max ($status = 1) {
            $this->load->model('mdl_personal');
            $query = $this->mdl_personal->get_max($status);
            return $query;
    }

    function _custom_query ($mysql_query) {
            $this->load->model('mdl_personal');
            $query = $this->mdl_personal->_custom_query($mysql_query);
            return $query;
    }

}


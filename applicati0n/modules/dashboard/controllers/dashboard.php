<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends MX_Controller{

    function __construct() {	
        parent::__construct();		
		Modules::run('security/make_sure_is_admin');
    }

    function manage() {
        //$data['tabs_view']=Modules::run('tabs');
        $data['q_reservation'] = Modules::run('reservation/get', 'id');
        
        $q_r_count = Modules::run('reservation/get','id');
        $data['q_r_count'] = $q_r_count->num_rows();
        
        $q_v_count = Modules::run('vehicle/get','id');
        $data['q_v_count'] = $q_v_count->num_rows();
        
        $q_l_count = Modules::run('location/get','id');
        $data['q_l_count'] = $q_l_count->num_rows();
        
        $q_u_count = Modules::run('users/get','id');
        $data['q_u_count'] = $q_u_count->num_rows();
        
        $data['module']="dashboard";
        $data['view_file']="dashboard_view";		
        $this->load->module('template');
        $this->template->admin($data);
    }    
    
	
	
}


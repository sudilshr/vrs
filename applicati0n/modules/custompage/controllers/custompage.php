<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Custompage extends MX_Controller {
	function __construct() {
		parent::__construct();
	}
	
	function index() {
		//$data['tabs_view']=Modules::run('tabs');
                $data['active_menu'] = "home"; 
                $data['title']="Home";
                
		$data['revolution_slider']=Modules::run('revolution_slider');
		$data['module']="custompage";
		$data['view_file']="welcome";
		$data['loc_name'] = Modules::run('location/get','id');
                $data['v_type_name'] = Modules::run('type/get','id');
                $data['q_vehicle'] = Modules::run('vehicle/get','id');
		$this->load->module('template');
		$this->template->home_page($data);
	}
}


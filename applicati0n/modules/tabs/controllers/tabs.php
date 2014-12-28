<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tabs extends MX_Controller {
	function __construct() {
		parent::__construct();
	}
	

	function index()
	{
		$this->load->view('tabs_view');
	
	}
}


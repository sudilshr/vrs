<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Security extends MX_Controller {
	function __construct() {
		parent::__construct();
	}
	
	function make_hash() {
		$password = "admin";
		$enc_pass = $this->md5_sha1($password);
		echo $enc_pass;
	}
	
	function md5_sha1($password){
		$new_pass= md5($password).sha1($password);
		return $new_pass;
	}
        function sha1($password){
		$new_pass= sha1($password);
		return $new_pass;
	}
	
	function make_sure_is_admin() {
		$user_id = $this->session->userdata('user_id');
		
		if (!is_numeric($user_id)) {
			redirect(base_url().'dashboard/users/login');
		}
	}
        /*function make_sure_is_user() {
		$user_id = $this->session->userdata('user_id');
		$user_role = $this->session->userdata('user_role');
		if (!is_numeric($user_id)) {
			redirect(base_url());
		}
	}*/
}


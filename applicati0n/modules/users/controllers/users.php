<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends MX_Controller {
	function __construct() {
		parent::__construct();
                $this->load->module('template');
	}
	
	public function manage() {
		
		$data['query'] = $this->get('id');
		$data['module']="users";
		$data['view_file']="manage";		
		$this->load->module('template');
		$this->template->admin($data);
	
	}
        
         
        public function add(){
        
            $data['q_users_max'] = $this->get_max();
            //$data['q_vendor']=Modules::run('vendor/get', 'id');
            //$data['q_type'] = Modules::run('type/get','id');
            $data['module']="users";
            $data['view_file']="add";

            $this->template->admin($data);
        }
        
        public function create(){
            if($_SERVER['REQUEST_METHOD']=='POST'){
                    $action = $_POST['action'];

                    $data['role'] = $_POST['role'];
                    $data['username'] = $_POST['username'];
                    $data['email'] = $_POST['email'];
                    $data['password'] = sha1($_POST['password']);

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
                    $data['module']="users";
                    $data['view_file']="manage";
                    

                    $this->template->admin($data);
            }
    }
	
        public function edit(){
                            
            $update_id = $this->uri->segment(4);
            //$submit = $this->input->post('submit', TRUE);

            if (is_numeric($update_id)) {
                $query = $this->get_where($update_id);
                    foreach ($query->result() as $row) { 
                        $data['role'] = $row->role;
                        $data['username'] = $row->username;
                        $data['email'] = $row->email;
                        $data['password'] = $row->password;
                    }

            }
            $data['update_id'] = $update_id;
            $data['module'] = "users";
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
            $data['module']="users";
            $data['view_file']="manage";


            $this->template->admin($data);
        }
	function _in_you_go($username, $password) {
		//give them a session variable and sent them to admin panel
		$query = $this->get_where_custom('username', $username);
		foreach($query->result() as $row) {
			$user_id =  $row->id;                        
                        
		}
                $enc_pass = Modules::run('security/sha1',$password);
                if ($query->num_rows()>=1&&$row->password==$enc_pass) {
                    $this->session->set_userdata('user_id', $user_id);
                    redirect(base_url().'dashboard/');
                
                    
                }else {
                    redirect(base_url().'users/login');
                }
                    
		
	}
	function submit()
	{
		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');

		//$this->form_validation->set_rules('username', 'Username', 'required|max_length[30]|xss_clean');
		//$this->form_validation->set_rules('password', 'Password', 'required|max_length[30]|xss_clean|callback_password_check');
		
		
		//if ($this->form_validation->run($this) == FALSE)
		//{
			$this->login();
		//}
		//else
		//{
			$username=$this->input->post('username', TRUE);
                        $password=$this->input->post('password', TRUE);
			$this->_in_you_go($username,$password);
		//}
	}

	function password_check($password)
	{
		$username=$this->input->post('username', TRUE);
		$password=Modules::run('security/make_hash', $password);
		$this->load->model('mdl_users');
		$result = $this->mdl_users->password_check($username, $password);
		
		if ($result == FALSE)
		{
			//$this->form_validation->set_message('password_check', 'You did not enter a correct username or/and password');
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}
	function login() {
            	
                
		$data['module']="users";
		$data['view_file']="loginform";
		
		$this->load->module('template');
		$this->template->admin_login_page($data);
                
                
                
		//$data['view_file'] = "loginform";
		//$this->load->module('template');
		//$this->template->public_one_col($data);
	}
	
        function logout () {
		$this->session->sess_destroy();
		redirect(base_url().'dashboard/users/login');
	}
        
	function get($order_by) {
		$this->load->model('mdl_users');
		$query = $this->mdl_users->get($order_by);
		return $query;
	}
	
	function get_with_limit($limit, $offset, $order_by) {
		$this->load->model('mdl_users');
		$query = $this->mdl_users->get_with_limit($limit, $offset, $order_by);
		return $query;
	}
	
	function get_where($id) {
		$this->load->model('mdl_users');
		$query = $this->mdl_users->get_where($id);
		return $query;
	}
	
	function get_where_custom($col, $value) {
		$this->load->model('mdl_users');
		$query = $this->mdl_users->get_where_custom($col, $value);
		return $query;
	}
	
	function _insert($data) {
		$this->load->model('mdl_users');
		$query = $this->mdl_users->_insert($data);
		return $query;
	}
	
	function _update($id, $data) {
		$this->load->model('mdl_users');
		$query = $this->mdl_users->_update($id, $data);
		return $query;
	}
	
	function _delete($id) {
		$this->load->model('mdl_users');
		$query = $this->mdl_users->_delete($id);
		return $query;
	}
	
	function cout_where($column, $value) {
		$this->load->model('mdl_users');
		$query = $this->mdl_users->cout_where($column, $value);
		return $query;
	}
	
	/*
	function cout_all() {
		$this->load->model('mdl_users');
		$query = $this->mdl_users->cout_all();
		return $query;
	}
	*/
	
	function get_max() {
		$this->load->model('mdl_users');
		$query = $this->mdl_users->get_max();
		return $query;
	}
	
	function _custom_query($mysql_query) {
		$this->load->model('mdl_users');
		$query = $this->mdl_users->_custom_query($mysql_query);
		return $query;
	}
}


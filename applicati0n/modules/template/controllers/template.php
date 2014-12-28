<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template extends MX_Controller {

	
	
	function home_page($data) {
                Modules::run('security/make_sure_is_admin');
		$this->load->view('public_header_view',$data);
		$this->load->view('public_home_page',$data);
		$this->load->view('footer_view');
		$this->load->view('public_bottom_view');
	}
	
	function public_inner_page($data) {
                $this->load->view('public_header_view',$data);
		$this->load->view('public_inner_page',$data);
		$this->load->view('footer_view');
		$this->load->view('public_bottom_view');
                
		
	}
	
	function admin($data) {
            Modules::run('security/make_sure_is_admin');
            $user_id = $this->session->userdata('user_id');
            $query=Modules::run('users/get_where', $user_id);
            
            
            foreach ($query->result() as $row) {
                    $data['username']=$row->username;
            }
            
            
            
            $this->load->view('admin',$data);
                
	}
        
        function admin_login_page($data) {
            
            $this->load->view('admin_login_page',$data);
                
                
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
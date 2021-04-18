<?php
/**
 * summary
 */
class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
	}
    /**
     * summary
     */
    public function index()
    {
    	$this->load->view('templates/header');
        $this->load->view('view_login');
        $this->load->view('templates/footer');
    }

    public function authentication()
	{
		$email    = $this->input->post('username');
		$password = $this->input->post('password');
		$validate = $this->login_model->validate($email,$password);
		if($validate->num_rows() > 0){
	        $data  = $validate->row_array();
	        $name  = $data['username'];
	        $email = $data['password'];
	        $level = $data['role'];
	        $sesdata = array(
	            'username' => $name,
	            'password' => $email,
	            'role'     => $level,
	            'logged_in' => TRUE
	        );
	        $this->session->set_userdata($sesdata);
	        // access login for admin
		        if($level == 'root'){
		        	redirect(base_url("root"));
		 
		        // access login for staff
		        }elseif($level == 'admin'){
		        	redirect(base_url("admin"));
		        }
	    }else {
	    	echo $this->session->set_flashdata('msg','Username or Password is Wrong');
	    	redirect('login');
	    }

	}

	function logout(){
		$this->session->sess_destroy();
		redirect('home/index');
	}

}
?>
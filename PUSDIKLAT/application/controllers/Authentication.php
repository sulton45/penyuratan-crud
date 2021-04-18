<?php 

/**
 * summary
 */
class Authentication extends CI_Controller
{
    /**
     * summary
     */
    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('logged_in') !== TRUE){
        	redirect('login');
        }
    }

    public function root()
    {
    	if($this->session->userdata('level')==='1'){
          $this->load->view('dashboard_view');
      }else{
          echo "Access Denied";
      }

    }
}
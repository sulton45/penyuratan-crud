<?php 
/**
 * summary
 */
class Root extends CI_Controller
{
    /**
     * summary
     */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Root_model');
		if ($this->session->userdata('logged_in') != TRUE) {
			redirect(base_url('login'));
		}
	} 

    public function index()
    {
    	$this->load->model('Root_model');
    	$data['mahasiswa'] = $this->Root_model->getAllmahasiswa();
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('root/index', $data);
        $this->load->view('templates/footer');
    }
}
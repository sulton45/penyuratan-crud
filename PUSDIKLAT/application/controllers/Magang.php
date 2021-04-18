<?php 
/**
 * summary
 */
class Magang extends CI_Controller
{
    /**
     * summary
     */
    public function __construct()
    {
    	parent::__construct();
        $this->load->model('magang_model');
    }

    public function index()
    {
    	$this->load->view('templates/header');
    	$this->load->view('templates/navbar');
    	$this->load->view('templates/footer');
    }

    public function tambah_magang()
    {          
        $this->load->view('templates/header');
        $this->load->view('user/form_magang');
        $this->load->view('templates/footer');
    }

    public function tambahDataMagang()
    {
        $nim = $this->input->post('nim', true);
        $nama = $this->input->post('nama', true);
        $instansi = $this->input->post('instansi', true);
        $prodi = $this->input->post('prodi', true);
        $no_telp = $this->input->post('no_telp', true);
        $email = $this->input->post('email', true);
        $semester = $this->input->post('semester', true);
        // $khs = $this->input->post('khs', true);

        $data = array(
				'nim' => $nim,
				'nama' => $nama,
				'instansi' => $instansi,
				'prodi' => $prodi,
				'no_telp' => $no_telp,
				'email' => $email,
				'semester' => $semester
				// 'khs' => $khs,
			);

        $this->magang_model->tambahDataMagang($data);
        redirect('home/unit');
    }
}
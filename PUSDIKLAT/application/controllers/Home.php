<?php

/**
 * summary
 */
class Home extends CI_Controller
{
    /**
     * summary
     */
    public function index()
    {
    	$this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('home/index');
        $this->load->view('templates/footer');
    }

    public function unit()
    {
        $this->load->view('templates/header');
         $this->load->view('templates/navbar');
         $this->load->view('user/unit');
         $this->load->view('templates/footer'); 
    }

    public function penelitian()
    {
        $this->load->view('templates/header');
         $this->load->view('templates/navbar');
         $this->load->view('user/penlit');
         $this->load->view('templates/footer');   
    }

    public function form_magang()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('user/form_magang');
        $this->load->view('templates/footer');
    }

    public function form_penelitian()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('user/form_penelitian');
        $this->load->view('templates/footer');
    }
}
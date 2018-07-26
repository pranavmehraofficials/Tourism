<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home_controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }
    /**
     * this function use for index page
     */
    public function index()
    {
        $this->load->view('header');
        $this->load->view('sidebar');
        $this->load->view('navbar');
        $this->load->view('tourism/index');
        $this->load->view('footer');
    }

    /**
     * this function use for about page
     */
    public function about_us()
    {
        $this->load->view('header');
        $this->load->view('sidebar');
        $this->load->view('navbar');
        $this->load->view('tourism/about_us');
        $this->load->view('footer');
    }

    /**
     * this function use for about page
     */
    public function contact_us()
    {
        $this->load->view('header');
        $this->load->view('sidebar');
        $this->load->view('navbar');
        $this->load->view('tourism/contact_us');
        $this->load->view('footer');
    }
}
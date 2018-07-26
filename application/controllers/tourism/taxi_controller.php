<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class taxi_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index() {
        $this->load->view('tourism/taxi/car_homepage');
    }
}
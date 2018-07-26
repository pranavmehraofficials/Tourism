<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class flight_controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index() {
        $this->load->view('tourism/flight/flight_homepage');
    }

    public function index1() {
        $this->load->view('tourism/flight/flight_detail_left_sidebar');
    }

    public function index2() {
        $this->load->view('tourism/flight/flight_detail_right_sidebar');
    }

    public function index3() {
        $this->load->view('tourism/flight/flight_grid_left_sidebar');
    }

    public function index4() {
        $this->load->view('tourism/flight/flight_grid_right_sidebar');
    }

    public function index5() {
        $this->load->view('tourism/flight/flight_listing_left_sidebar');
    }

    public function index6() {
        $this->load->view('tourism/flight/flight_listing_right_sidebar');
    }

}
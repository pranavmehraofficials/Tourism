<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login_controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function register() {
        $this->load->view('header');
        $this->load->view('sidebar');
        $this->load->view('navbar');
        $this->load->view('tourism/registration');
        $this->load->view('footer');
    }

    public function login() {
        if(isset($_POST['register'])) {
            $this->form_validation->set_rules('username','User Name','trim|required|min_length[3]|max_length[25]');
            $this->form_validation->set_rules('email','User Name','trim|required|min_length[3]|max_length[25]');
            $this->form_validation->set_rules('mobile_no','Mobile Number','trim|required|numbermin_length[10]|max_length[15]');
            $this->form_validation->set_rules('password','User Name','trim|required|min_length[3]|max_length[25]');
            $this->form_validation->set_rules('confirm_password','User Name','trim|required|matches[password]');
            if($this->form_validation->run() == true) {
                $password = $this->input->post('password');
                $enc_pass = md5($password);
                $insert_data = [
                    'username' => $this->input->post('username'),
                    'email' => $this->input->post('email'),
                    'password' => $enc_pass,
                    'mobile_no' => $this->input->post('mobile_no'),
                ];
                $this->db->insert('user',$insert_data);
            } else {
                redirect(base_url().'register');
            }
        } else {
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('navbar');
            $this->load->view('tourism/login');
            $this->load->view('footer');
        }
    }
}
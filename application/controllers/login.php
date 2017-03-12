<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index() {
        if ($this->input->post('submit')) {
            $un = $this->input->post('username');
            $ps = $this->input->post('password');

            $this->load->model('loginmodel');

            if ($this->loginmodel->verifyUser($un, $ps)) {
                $this->session->set_userdata('loggedin', true);
                redirect('http://localhost:8888/ci226/home', 'refresh');
            } else {
                echo "Error";
            }
        } else {
            $this->load->view('view_login');
        }
    }

}

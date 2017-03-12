<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index() {
        $this->load->view('view_home');
        if ($this->input->post('studentSubmit')) {
            $name = $this->input->post('name');
            $guardianName = $this->input->post('guardianName');
            $address = $this->input->post('address');
            $mobile = $this->input->post('mobile');
            $class = $this->input->post('class');
            
            echo $name . $guardianName . $address . $mobile . $class;
            
            $this->load->model('addStudentModel');
            $this->addStudentModel->addStudent($name,$guardianName,$mobile,$address,$class);
        }
    }
    public function getSubject(){
        $cl = $this->input->get("cl");

        $this->load->model('classSubModel');
        $arr = $this->classSubModel->getSub($cl);
        //echo $arr;
        echo json_encode($arr);
    }
    public function getteacher(){

        $this->load->model('classSubModel');
        $arr = $this->classSubModel->getteacher();
        //echo $arr;
        echo json_encode($arr);
    }

}

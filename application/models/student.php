
<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Student extends CI_Model {

    function addStudent($name,$guardianName,$mobile,$address,$class){
       //  $sql = "INSERT INTO `student`(`id`, `name`, `guardian`, `mobile`, `address`, `class`)
       //   VALUES (null,'$name','$guardianName',$mobile,'$address',$class)";
        
        
       // $this->db->query($sql);

        $data = array(
            'id' => null,
            'name' => $name,
            'guardian' => $guardianName,
            'mobile' => $mobile,
            'address' => $address,
            'class' => $class
        );

        $this->db->insert('student', $data);
        $insert_id = $this->db->insert_id();

        ///////////////////////##############################

        
        if ($class == 1) {
            $this->db->select('english');
            # code...
            $r = $this->db->get("class_1");
            $r1 = $r->result_array();
            $data1 = array(
                'student_id' => $insert_id,
                'result' => 0,
                'grade' => "",
                'teacher_id' => $r1[0]['english']
            );

            $this->db->insert('english_result', $data1);

            $this->db->select('bengali');
            # code...
            $r = $this->db->get("class_1");
            $r1 = $r->result_array();
            $data1 = array(
                'student_id' => $insert_id,
                'result' => 0,
                'grade' => "",
                'teacher_id' => $r1[0]['bengali']
            );

            $this->db->insert('bengali_result', $data1);
        }

        
        if ($class == 2) {
            $this->db->select('english');
            # code...
            $r = $this->db->get("class_2");
            $r1 = $r->result_array();
            $data1 = array(
                'student_id' => $insert_id,
                'result' => 0,
                'grade' => "",
                'teacher_id' => $r1[0]['english']
            );

            $this->db->insert('english_result', $data1);

            $this->db->select('bengali');
            # code...
            $r = $this->db->get("class_2");
            $r1 = $r->result_array();
            $data1 = array(
                'student_id' => $insert_id,
                'result' => 0,
                'grade' => "",
                'teacher_id' => $r1[0]['bengali']
            );

            $this->db->insert('bengali_result', $data1);
        }
        

    }

}
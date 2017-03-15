
<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class ClassSubModel extends CI_Model {

    public function getSub($cl) {
        
       $this->db->select("subject");
       $result = $this->db->get($cl);

       return $result->result_array();
    }
    public function getteacher()
    {

       $result = $this->db->get("teacher");
       return $result->result_array();
    }
    public function addRou($class,$engTeacher,$benTeacher)
    {

        if ($class == "class_1") {
            # code...
            
            // $this->db->select('name');
            // $this->db->where('id',$engTeacher);
            // $arr1 = $this->db->get('teacher');
            // $result1 =  $arr1->result_array();


            // $this->db->select('name');
            // $this->db->where('id',$benTeacher);
            // $arr2 = $this->db->get('teacher');
            // $result2 =  $arr2->result_array();

            $data = array(
               'english' => $engTeacher,
               'bengali' => $benTeacher
            );
            $this->db->update($class, $data); 
        }

        if ($class == "class_2") {
            # code...
            
            // $this->db->select('name');
            // $this->db->where('id',$engTeacher);
            // $arr1 = $this->db->get('teacher');
            // $result1 =  $arr1->result_array();


            // $this->db->select('name');
            // $this->db->where('id',$benTeacher);
            // $arr2 = $this->db->get('teacher');
            // $result2 =  $arr2->result_array();

            $data = array(
               'english' => $engTeacher,
               'bengali' => $benTeacher
            );
            $this->db->update($class, $data); 
        }

    }
   

}
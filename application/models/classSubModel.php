
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

}
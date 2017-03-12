
<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class AddStudentModel extends CI_Model {

    public function addStudent($name, $guardianName, $mobile, $address, $class) {
////        $sql = "INSERT INTO `student`(`id`, `name`, `guardian`, `mobile`, `address`, `class`) VALUES (null,'$name'
////                ,'$guardianName',$mobile,'$address',$class)";
//        
//        
//        $this->db->query($sql);
        $data = array(
            'id' => null,
            'name' => $name,
            'guardian' => $guardianName,
            'mobile' => $mobile,
            'address' => $address,
            'class' => $class
        );

        $this->db->insert('student', $data);
    }

}

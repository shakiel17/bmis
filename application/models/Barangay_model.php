<?php
    date_default_timezone_set('Asia/Manila');
    class Barangay_model extends CI_model{
        public function __construct(){
            $this->load->database();
        }
        public function authenticate($type,$username,$password){
            if($type=="admin"){
                $result=$this->db->query("SELECT * FROM `admin` WHERE username='$username' AND `password`='$password'");
            }else{
                $result=$this->db->query("SELECT * FROM `users` WHERE username='$username' AND `password`='$password'");
            }
            return $result->row_array();
        }
    }
?>

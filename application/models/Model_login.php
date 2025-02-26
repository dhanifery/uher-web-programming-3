<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model {

        public function login_user($username, $password)
        {
                $this->db->select('*');
                $this->db->from('login');
                $this->db->where(array(
                        'username' => $username,
                        'password' => $password
                ));
                return $this->db->get()->row_array();   
        } 
        

}

/* End of file ModelName.php */

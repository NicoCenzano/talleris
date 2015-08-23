<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
    
    public function _add_user($name, $lastname, $password, $email){
        
        $data = array(
            'name' => $name,
            'lastname' => $lastname,
            'email' =>  $password,
            'password' => $email
        );
               
        $this->db->insert('user', $data);
    }
    

}
?>
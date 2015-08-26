<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    
    public function _add_user($name, $lastname, $password, $email)
    {
        //call createUsers("Giorgio",  "Viacava",  "gviacava@alumnos.uai.cl",  "sd56789", @id)
        
        $this->db->query("call createUsers(".$name.",  ".$lastname.",  ".$email.",  ".$password.", @id)");
        return $query->row();
        
    }
    
    /*
    public function _add_user($name, $lastname, $password, $email)
    {
        $data = array(
            'name' => $name,
            'lastname' => $lastname,
            'email' => $email,
            'password' => $password
        );
        
        $this->db->insert('user', $data);
    }
    */
}
?>
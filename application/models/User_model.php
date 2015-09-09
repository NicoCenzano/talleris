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
        $this->db->query("CALL createUsers('{$name}', '{$lastname}', '{$email}', '{$password}', @id);");
    }

    public function _update_user($b, $c)
    {
        $query = $this->db->query("UPDATE `users` SET `father`= " . $b . " WHERE `idUsers` = " . $c . "");
    }

    public function _exit_user($email, $password)
    {
            $this->db->select('*');
            $this->db->from('users');
            $this->db->where('email', $email);
            $this->db->where('password', $password);
            $query = $this->db->get();
            return $query->row();           
    }
}
?>
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
        $query->result();
    }
}
?>
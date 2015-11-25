<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    /*
     * public function _add_user($name, $lastname, $password, $email)
     * {
     * $this->db->query("CALL createUsers('{$name}', '{$lastname}', '{$email}', '{$password}', @id);");
     * }
     */
    public function _add_user($name, $lastname, $password, $email)
    {
        $this->db->trans_start();
        $this->db->query("CALL createUsers('{$name}', '{$lastname}', '{$email}', '{$password}', @id);");
        $this->db->trans_complete();
        
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
        } else {
            $this->db->trans_commit();
        }
        
    }

    public function _update_user($iduser, $name, $lastname, $email, $password)
    {
        $this->db->trans_start();
        $this->db->query("CALL createUsers('{$iduser}', '{$name}', '{$lastname}', '{$email}', '{$password}', @updated);");
        $this->db->trans_complete();
        
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
        } else {
            $this->db->trans_commit();
        }
        
        //$query = $this->db->query("UPDATE `users` SET `father`= " . $b . " WHERE `idUsers` = " . $c . "");
    }

    public function _delete_user($iduser, $name, $lastname, $email, $password)
    {
        $this->db->trans_start();
        $this->db->query("CALL deleteUser('{$id}', @delete);");
        $this->db->trans_complete();
    
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
        } else {
            $this->db->trans_commit();
        }
    
        //$query = $this->db->query("UPDATE `users` SET `father`= " . $b . " WHERE `idUsers` = " . $c . "");
    }
    
    public function _exists_user($email, $password)
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
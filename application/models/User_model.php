<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
    
    public function _add_user($id, $nombres, $appelidos, $clave, $rut, $email){
        
        $data = array(
            'idUsuarios' => $id,
            'nombres' => $nombres,
            'apellidos' => $appelidos,
            'clave' =>  $clave,
            'rut' => $rut,
            'email' => $email
        );
               
        $this->db->insert('usuarios', $data);
    }
    

}
?>
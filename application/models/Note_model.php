<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Note_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
    
    public function _view_note(){
    
        $data = array(
            'type' => $name,
            'admin_idadmin' => $iduser
        );
         
        $this->db->insert('item_types', $data);
    }
    
    public function _update_note()
    {
        $data = array(
            'name' => $name,
            'type_idtypes' => $type,
            'location_idlocation' => $location,
            'description' => $description,
            'photo' => $photo,
            'admin_idadmin' => $this->session->userdata('iduser')
        );
    
        $this->db->where('iditems', $id);
    }
    
    public function _view_note(){
    
        $data = array(
            'type' => $name,
            'admin_idadmin' => $iduser
        );
         
        $this->db->insert('item_types', $data);
    }
    
    public function _add_note(){
        
        $data = array(
            'type' => $name,
            'admin_idadmin' => $iduser
        );
               
        $this->db->insert('item_types', $data);
    }
    

}
?>
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Add_note extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        
        $this->load->library('form_validation');
        
        // Archivos de lenguaje
        $languages_files = array(
            'public/page_element/menu_header',
            'public/page/index'
        );
        
        $this->lang->load($languages_files);
    }

    /*
     * Crear pagina de inicio
     */
    public function form_sing_up_page()
    {
        $this->form_validation->set_rules('name', 'Nombre', 'trim|required|min_length[2]|max_length[255]');
        $this->form_validation->set_rules('lastname', 'Apellido', 'trim|required|min_length[2]|max_length[255]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('run', 'Nombre', 'trim|required|min_length[2]|max_length[10]|alpha_numeric');
        $this->form_validation->set_rules('password', 'Nombre', 'trim|required|min_length[2]|max_length[30]');
        $this->form_validation->set_rules('repeatpassword', 'Nombre', 'trim|required|min_length[2]|matches[password]|max_length[30]');
        
        $this->load->view("public/page_element/header");
        $this->load->view("public/page_element/menu_header");
        
        if ($this->form_validation->run() === TRUE) {
            $this->load->view("public/includes/sing_up/message_sing_up.php");
            $this->load->view("public/includes/sing_up/access_form");
        } else {
            $this->load->view("public/includes/sing_up/access_form");
        }
        
        $this->load->view("public/page_element/footer");
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sing_up extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->library('form_validation');
        
        $model = array(
            'user_model'
        );
        $this->load->model($model);
        
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

        $this->load->view("public/page_element/header");
        $this->load->view("public/page_element/menu_header");

        if ($this->form_validation->run() === TRUE) {
            
        }

        $this->load->view("public/page_element/footer");
    }
}

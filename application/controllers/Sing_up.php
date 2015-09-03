<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sing_up extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        
        $model = array(
            'User_model'
        );
        
        $this->load->model($model);
        
        $languages_files = array(
            'public/page_element/menu_header',
            'public/page/sing_up'
        );
        
        $this->lang->load($languages_files);
    }

    public function sing_up_page()
    {
        $this->form_validation->set_rules('name', 'Nombre', 'trim|required|min_length[2]|max_length[255]');
        $this->form_validation->set_rules('lastname', 'Apellido', 'trim|required|min_length[2]|max_length[255]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'contraseña', 'trim|required|min_length[2]|max_length[30]!md5');
        $this->form_validation->set_rules('repeatpassword', 'contraseña', 'trim|required|min_length[2]|matches[password]|max_length[30]');
        
        $this->load->view("public/page_element/header");
        $this->load->view("public/page_element/menu_header");
        
        if ($this->form_validation->run() === TRUE) {
            
            $this->load->view("public/includes/sing_up/message_sing_up.php");
            $this->load->view("public/includes/sing_up/access_form");          
            
            $this->User_model->_add_user($this->input->post('name'), $this->input->post('lastname'), $this->input->post('password'), $this->input->post('email'));
       
        } else {
            $this->load->view("public/includes/sing_up/access_form");
        }
        
        $this->load->view("public/page_element/footer");
    }
}

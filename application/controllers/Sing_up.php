<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sing_up extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        
        $model = array(
            'user_model'
        );
        
        $this->load->model($model);
        
        $languages_files = array(
            'public/page_element/menu_header',
            'public/page/index'
        );
        
        $this->lang->load($languages_files);
    }

    public function sing_up_page()
    {
        $this->form_validation->set_rules('name', 'Nombre', 'trim|required|min_length[2]|max_length[255]');
        $this->form_validation->set_rules('lastname', 'Apellido', 'trim|required|min_length[2]|max_length[255]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Nombre', 'trim|required|min_length[2]|max_length[30]!md5');
        $this->form_validation->set_rules('repeatpassword', 'Nombre', 'trim|required|min_length[2]|matches[password]|max_length[30]!md5');
        
        $this->load->view("public/page_element/header");
        $this->load->view("public/page_element/menu_header");
        
        if ($this->form_validation->run() === TRUE) {
            $this->load->view("public/includes/sing_up/message_sing_up.php");
            $this->load->view("public/includes/sing_up/access_form");
            
            $this->add_user($this->input->post('name'), $this->input->post('lastname'), $this->input->post('password'), $this->input->post('email'));
        } else {
            $this->load->view("public/includes/sing_up/access_form");
        }
        
        $this->load->view("public/page_element/footer");
    }

    private function add_user($name, $lastname, $password, $email)
    {
        $this->User_model->_add_user($name, $lastname, $password, $email);
    }
}

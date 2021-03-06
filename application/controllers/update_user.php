<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Update_user extends CI_Controller
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

    public function Update_page()
    {
        $this->form_validation->set_rules('email', 'email', 'trim|required|min_length[2]|max_length[255]');
        $this->form_validation->set_rules('password', 'contraseña', 'trim|required|min_length[2]|max_length[255]');
        
        $this->load->view("public/page_element/header");
        $this->load->view("public/page_element/menu_header");
        
        if ($this->form_validation->run() === TRUE) {   
            
        	$data = $this->User_model->_exists_user($this->input->post('email'), $this->input->post('password'));
        	
        	if(isset($data)){
        	    redirect('', 'refresh');
        	}else{
        	    redirect('sing_up', 'refresh');
        	}
        	
        } else {
            $this->load->view("public/includes/sing_in/access_form");
        }
        
        $this->load->view("public/page_element/footer");
    }
}

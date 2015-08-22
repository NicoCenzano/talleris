<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
    
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
    
	public function index()
	{
	    $this->load->view("public/page_element/header");
	    $this->load->view("public/page_element/menu_header");
	    $this->load->view("public/page_element/footer");
	}
}

<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Pequeña descripcion
 *
 * Descripcion larga y detallada
 *
 * @package controllers
 * @author Giorgio Viacava <viacava@outlook.com>
 */
class Index extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();

        $helper_files = array();
        $this->load->helper($helper_files);

        $library_files = array();
        $this->load->library($library_files);

        //Archivos de lenguaje
        $languages_files = array(
            'public/page_element/menu_header',
            'public/page/index'
        );
        $this->lang->load($languages_files);
    }

    /*
     * Crear pagina de inicio
     */

    public function weolcome_page()
    {
        $this->load->view("public/page_element/header");
        $this->load->view("public/page_element/menu_header");
        $this->load->view("public/includes/index/wealcome_message");
        $this->load->view("public/page_element/footer");
    }

}

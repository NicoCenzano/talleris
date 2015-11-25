<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Cerrar cession
 *
 */
class logout extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Salir de la cuenta del administrdor
     *
     * Borra los datos de session del administrador, lo redirige a la la pagina de inicio para poder salir de su
     * seccion
     *
     */
    public function exit_admin()
    {

        // Borrar la informacion de la pagina
        $this->session->sess_destroy();
        redirect('', 'refresh');
    }

}

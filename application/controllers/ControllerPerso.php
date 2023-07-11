<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerPerso extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if(!$this->session->userdata('isConnected')){
            redirect('Accueil/accueil');          
        }
    }


}

?>
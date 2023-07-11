<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerStatistique extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if(!$this->session->userdata('isConnected')){
            redirect('Welcome/index');          
        }
    }
    public function statistique(){

        $this->load->Model('Statistique');

        $val = $this->Statistique->getStatistiqueMontant();
        $date = "'";
        $montant = "'";
        for ($i=0; $i < count($val); $i++) {
            $date = $date.$val[$i]->dateEntree."'" ;
            $montant = $montant.$val[$i]->montant."'" ;
            if($i<count($val)-1){
                $date = $date.",'";
                $montant = $montant.",'";
            }
        }

        $data['date'] = $date; 
        $data['montant'] = $montant; 
        $data['content'] ='statistique'; 

        $this->load->view('template_admin',$data);
    }

}

?>

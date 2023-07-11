<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ControllerFaneva extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if(!$this->session->userdata('isConnected')){
            redirect('Welcome/index');          
        }
    }

    public function formInsererCode()
    {
        $this->load->Model('Code');
        $data['allcode'] = $this->Code->getAllCode();
        $this->load->view('insererCode', $data);
    }

    public function demandeAjoutCode()
    {
        $this->form_validation->set_rules('numero', 'numero', 'required');

        if ($this->form_validation->run() === false) {
            $data['error'] = validation_errors();
            $this->load->view('insererCode', $data);
        } else {
            $this->load->Model('Code');
            $code = $this->Code->CodeByNumero($_POST['numero']);
            if (count($code) != 0) {
                $flag = $this->Code->siDejaLa($code[0]->idcode);
                // var_dump($flag);
                if ($flag == false) {
                    // le idclient le 1 io 
                    $this->Code->insererDemande($_SESSION['client']->idclient, $code[0]->idcode);
                    redirect('Accueil/choix');
                } else {
                    $data['allcode'] = $this->Code->getAllCode();
                    $data['error'] = "deja demander ou n'existe pas";
                    $this->load->view('insererCode', $data);
                }
            } else {
                $data['allcode'] = $this->Code->getAllCode();
                $data['error'] = "deja demander ou n'existe pas";
                $this->load->view('insererCode', $data);
                redirect('Accueil/choix');
            }
        }
    }

    // cote admin
    public function listeDemandeCode()
    {
        $this->load->Model('Code');
        $data['demande'] = $this->Code->listeDemandeCode();
        $this->load->view('listeDemandeCode', $data);
    }

    public function accepterDemande($idcodeClient)
    {
        $this->load->model('Code');

        $this->Code->updateCodeClient($idcodeClient);
        $codeClient = $this->Code->codeClientById($idcodeClient);

        $this->Code->debitPorteMonnaie($codeClient[0]->idclient, $codeClient[0]->valeur);
        $this->Code->insertHistorique($codeClient[0]->idclient,$codeClient[0]->valeur);

        redirect('AdminController/validation_code');
    }
}

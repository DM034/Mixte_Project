<?php

class RegimeController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if(!$this->session->userdata('isConnected')){
            redirect('Welcome/index');          
        }
    }
    public function get_repas()
    {
        $this->load->Model('RegimeClient');
        $this->load->Model('RegimeRepas');
        $this->load->Model('Profile');
        $this->load->Model('Client');
        $this->load->Model('Regime');
        $this->load->Model('Repas');


        $s = $this->session->client;
        $idclient = $s->idclient;
        $client = $this->Profile->get_profile($s->idclient);
        $monnaie = $this->Client->getMontant($idclient);


        $r = $this->RegimeClient->get_idregime_client($idclient);
        if ($r) {
            $idregime = $r->idregime;

            $regime = $this->Regime->getRegime_byid($idregime);

            $repas = $this->RegimeRepas->get_all_repas($idregime);

            $sport = $this->Regime->getSport($regime[0]->idobjectif);

            $tab_photo = array();

            for ($i = 0; $i < count($repas); $i++) {
                $tab_photo[$i] =  $this->Repas->avoirRepasPhoto($repas[$i]->idrepas);
            }

            $data['sport'] = $sport;
            $data['monnaie'] = $monnaie;
            $data['client'] = $client;
            $data['repas'] = $repas;
            $data['detail'] = $tab_photo;
            $data['content'] = "suggestion";

            $this->load->view('template', $data);
        }else{
            $data['monnaie'] = $monnaie;
            $data['client'] = $client;
            $data['content'] = "suggestion";
            $data['error']="Veuillez choisir d'abord un regime";

            $this->load->view('template', $data);
        }
    
    }
}

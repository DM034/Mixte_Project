<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Accueil extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if(!$this->session->userdata('isConnected')){
            redirect('Welcome/index');          
        }
    }

    public function accueil()
    {
        $this->load->Model('Profile');
        $this->load->Model('Client');
        $s = $this->session->client;

        $client = $this->Profile->get_profile($s->idclient);


        $data['client'] = $client;
        $data['monnaie'] = $this->Client->getMontant($s->idclient);
        $data['content']="hello";

        $this->load->view('template', $data);
    }

    public function code()
    {
        $this->load->Model('Profile');
        $this->load->Model('Client');
        $s = $this->session->client;

        $client = $this->Profile->get_profile($s->idclient);


        $data['client'] = $client;
        $data['monnaie'] = $this->Client->getMontant($s->idclient);

        $this->load->Model('Code');
        $data['allcode'] = $this->Code->getAllCode();
        $data['content'] = "code";
        $this->load->view('template', $data);
    }


    public function choix()
    {
        $this->load->Model('Profile');
        $this->load->Model('Client');
        $s = $this->session->client;

        $client = $this->Profile->get_profile($s->idclient);


        $data['client'] = $client;
        $data['monnaie'] = $this->Client->getMontant($s->idclient);

        $this->load->Model('Regime');
        $choix1 = $this->Regime->getRegimeObjectif(1);
        $choix2 = $this->Regime->getRegimeObjectif(2);


        $data['content'] = "choix";
        $data['choix1'] = $choix1;
        $data['choix2'] = $choix2;
        if(isset($_GET['error'])){
            $data['error'] = "Monnaie insuffisant !";
        }


        $this->load->view('template', $data);
    }

    public function suggestion()
    {
        $this->load->Model('Profile');
        $this->load->Model('Client');

        $s = $this->session->client;

        $client = $this->Profile->get_profile($s->idclient);

        $data['monnaie'] = $this->Client->getMontant($s->idclient);
        $data['client'] = $client;
        $data['content'] = "suggestion";
        $this->load->view('template', $data);
    }



   

    public function test()
    {
        $data['content'] = 'listeSport';
        $this->load->view('template', $data);
    }
}

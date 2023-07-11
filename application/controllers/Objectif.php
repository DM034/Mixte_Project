<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Objectif extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();

        if(!$this->session->userdata('isConnected')){
            redirect('Welcome/index');          
        }
    }

	public function objectif()
	{
		$this->load->Model('RegimeClient');
		$this->load->Model('Profile');
		$this->load->Model('Regime');
		$this->load->Model('Client');

		$s = $this->session->client;
		$idclient = $s->idclient;

		$idregime = $this->RegimeClient->get_idregime_client($idclient);
		$client = $this->Profile->get_profile($s->idclient);

		if (!empty($idregime)) {
			$regime = $this->Regime->getRegime_byid($idregime->idregime);
		}else{
			$regime = null;
		}
			$monnaie = $this->Client->getMontant($idclient);

			$data['monnaie'] = $monnaie;
			$data['regime'] = $regime;
			$data['client'] = $client;
			$data['content'] = "objectif";
			$this->load->view('template', $data);
	}

	public function ajouter_objectif()
	{
		$idregime = $_GET['idregime'];
		$this->load->Model('RegimeClient');
		$this->load->Model('Client');
		$this->load->Model('Regime');


		$s = $this->session->client;
		$idclient = $s->idclient;

		$regime = $this->Regime->getRegime_byid($idregime);
		$montant = $regime[0]->prixUnitaire;

		$porte_monnaie = $this->Client->getMontant($idclient);

		$regimeclient = $this->RegimeClient->get_idregime_client($idclient);

		if ($porte_monnaie > $montant) {
			if ($regimeclient) {
				$this->RegimeClient->changer_regime($idregime, $idclient);
				$this->RegimeClient->ajouter_regime($idregime, $idclient);
				$this->Client->payer_client($montant, $idclient);
				redirect('Objectif/objectif');
			} else {
				$this->RegimeClient->ajouter_regime($idregime, $idclient);
				$this->Client->payer_client($montant, $idclient);

				redirect('Objectif/objectif');
			}
		} else {
			$data['error'] = "Monnaie insuffisant !";
			redirect('Accueil/choix?error=Monnaie insuffisant !');
		}
	}
}

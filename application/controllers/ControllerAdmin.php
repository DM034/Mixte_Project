<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ControllerAdmin extends CI_Controller
{

    public function listeSports()
    {
        $this->load->Model('Sport');

        $data['allSport'] = $this->Sport->getAll("*");

        $this->load->view('listeSport', $data);
    }

    public function formInsererSport(){
        $this->load->Model('Objectif');

        $data['objectif'] = $this->Objectif->getAll("*");

        $this->load->view('ajoutSport', $data);
    }

    public function validerInsertionSport(){
        $this->form_validation->set_rules('nomsport', 'nom du sport', 'required');
        $this->form_validation->set_rules('objectif', 'objectif', 'required');
        $this->form_validation->set_rules('duree', 'duree', 'required');
        $this->form_validation->set_rules('variationPoids', 'variation du poids', 'required');

        if ($this->form_validation->run() === false) {
            $data['error'] = validation_errors();
            $this->load->Model('Objectif');

            $data['objectif'] = $this->Objectif->getAll("*");

            $this->load->view('ajoutSport', $data);
        
        
        } else {
            $this->load->Model('Sport');
            $this->Sport->insertSport($_POST);
            $this->listeSports();
        }
    }

    public function formModifSport($idsport)
    {
        $this->load->Model('Sport');
        $this->load->Model('Objectif');

        $data['sport'] = $this->Sport->getAll('*', 'idsport =' . $idsport);

        $data['objectif'] = $this->Objectif->getAll("*");

        $this->load->view('modifSport', $data);
    }

    public function validerModif($idsport)
    {

        $this->form_validation->set_rules('nomsport', 'nom du sport', 'required');
        $this->form_validation->set_rules('objectif', 'objectif', 'required');
        $this->form_validation->set_rules('duree', 'duree', 'required');
        $this->form_validation->set_rules('variationPoids', 'variation du poids', 'required');

        if ($this->form_validation->run() === false) {
            $data['error'] = validation_errors();

            $this->load->Model('Sport');
            $this->load->Model('Objectif');
            $data['sport'] = $this->Sport->getAll('*', 'idsport =' . $idsport);
            $data['objectif'] = $this->Objectif->getAll("*");
            $this->load->view('modifSport', $data);
        } else {

            $this->load->Model('Sport');

            $this->Sport->updateSport($idsport, $_POST);

            $this->listeSports();
        }
    }

    public function validerSuppr($idsport)
    {
        $this->load->Model('Sport');
        $this->Sport->delete('idsport = ' . $idsport);
        $this->listeSports();
    }

    public function detailSport($idsport)
    {
        $this->load->Model('Sport');
        $this->load->Model('Objectif');
        $data['sport'] = $this->Sport->getAll('*', 'idsport =' . $idsport);
        $data['objectif'] = $this->Objectif->getAll("*", 'idobjectif = ' . $data['sport'][0]->idobjectif);
        $this->load->view('detailSport', $data);
    }


    //------------------------------------------------------

    public function listeRegime()
    {
        $this->load->Model('Regime');

        $data['allRegime'] = $this->Regime->getAll("*");

        $this->load->view('listeRegime', $data);
    }

    public function formInsertionRegime(){

        $this->load->Model('Objectif');
        $this->load->Model('Repas');

        $data['repas'] = $this->Repas->getAll("*");
        $data['objectif'] = $this->Objectif->getAll("*");

        $this->load->view('ajoutRegime',$data);
    }

    public function validerInsertionRegime(){
        $this->form_validation->set_rules('nom', 'nom du regime', 'required');
        $this->form_validation->set_rules('objectif', 'objectif', 'required');
        $this->form_validation->set_rules('duree', 'duree', 'required');
        $this->form_validation->set_rules('variationPoids', 'variation du poids', 'required');
        $this->form_validation->set_rules('pu', 'prix unitaire', 'required');
        $this->form_validation->set_rules('idrepas[]', 'choisissez un repas', 'callback_check_checkbox');

        

        if ($this->form_validation->run() === false) {
            $this->load->Model('Objectif');
            $this->load->Model('Repas');

            $data['repas'] = $this->Repas->getAll("*");
            $data['objectif'] = $this->Objectif->getAll("*");
            $data['error'] = validation_errors();

            $this->load->view('ajoutRegime',$data);
        }   
        else{
            $this->load->Model('Regime');
            $this->Regime->insertRegime($_POST);
        }
    }

    public function detailRegime($idregime)
    {
        $this->load->Model('Regime');
        $data['regimeRepas'] = $this->Regime->getRepasRegime($idregime);
        $this->load->view('detailRegime', $data);
    }

    public function formModifRegime($idregime)
    {
        $this->load->Model('Regime');
        $this->load->Model('Repas');
        $this->load->Model('Objectif');

        $data['objectif'] = $this->Objectif->getAll("*");
        $data['repas'] = $this->Repas->getAll("*");
        $data['allRegime'] = $this->Regime->getAll("*");
        $data['regimeRepas'] = $this->Regime->getRepasRegime($idregime);

        $this->load->view('modifRegime', $data);
    }

    public function check_checkbox($checkbox_values)
    {
        if (empty($checkbox_values)) {
            $this->form_validation->set_message('check_checkbox', 'Veuillez sélectionner au moins une case à cocher.');
            return false;
        }
        return true;
    }

    public function validerModifRegime($idregime)
    {
        $this->form_validation->set_rules('nomregime', 'nom du regime', 'required');
        $this->form_validation->set_rules('objectif', 'objectif', 'required');
        $this->form_validation->set_rules('duree', 'duree', 'required');
        $this->form_validation->set_rules('variation', 'variation du poids', 'required');
        $this->form_validation->set_rules('idrepas[]', 'choisissez un repas', 'callback_check_checkbox');

        if ($this->form_validation->run() === false) {
            $this->load->Model('Regime');
            $this->load->Model('Repas');
            $this->load->Model('Objectif');

            $data['objectif'] = $this->Objectif->getAll("*");
            $data['repas'] = $this->Repas->getAll("*");
            $data['allRegime'] = $this->Regime->getAll("*");
            $data['regimeRepas'] = $this->Regime->getRepasRegime($idregime);
            $data['error'] = validation_errors();

            $this->load->view('modifRegime', $data);
        } else {

            $this->load->Model('Regime');
            $this->Regime->updateRegime($idregime, $_POST);

            $this->load->Model('RegimeRepas');

            $this->RegimeRepas->delete("idregime = " . $idregime);

            $idrepas = $_POST['idrepas'];
            for ($i = 0; $i < count($idrepas); $i++) {
                $this->RegimeRepas->insertRegimeRepas($idregime, $idrepas[$i]);
            }
        }
    }

    public function validerSupprimerRegime($idregime)
    {
        $this->load->Model('Regime');
        $this->load->Model('RegimeRepas');

        $this->RegimeRepas->delete("idregime = " . $idregime);
        $this->Regime->delete("idregime = " . $idregime);
    }

    // repas

    public function listeRepas()
    {
        $this->load->Model('Repas');
        $data['allrepas'] = $this->Repas->getAll("*");
        $this->load->view('listeRepas', $data);
    }

    public function formAjoutRepas()
    {
        $this->load->view('ajoutRepas');
    }

    public function validerInsertionRepas()
    {
        $this->load->Model('Repas');
        $this->form_validation->set_rules('repas', 'repas', 'required');

        if ($this->form_validation->run() === false) {
            
            $data['error'] = validation_errors();
            $data['allrepas'] = $this->Repas->getAll("*");
            $this->load->view('ajoutRepas', $data);
        } else {
            $config['upload_path'] = './fichiers/';
            $config['allowed_types'] = 'jpeg|jpg|png';
            $config['max_size'] = 4096;

            $this->load->library('upload', $config);

            // file ny name anle ao am input
            if (!$this->upload->do_upload('photo')) {
                $data['error'] = validation_errors();
                $data['allrepas'] = $this->Repas->getAll("*");
                $this->load->view('ajoutRepas', $data);
            } else {
                $data = $this->upload->data();
                $this->Repas->insertRepas($_POST,$data['file_name'], $config['upload_path'] . $data['file_name']);
            }
        }
    }

    public function detailRepas($idrepas){
        $this->load->Model('Repas');
        $data['detail'] = $this->Repas->avoirRepasPhoto($idrepas);
        $this->load->view('detailRepas',$data);
    }

    public function modifierRepas($idrepas){
        $this->load->Model('Repas');
        $data['detail'] = $this->Repas->getAll("*","idrepas =".$idrepas);
        $this->load->view('modifierRepas',$data);
    }

    public function validerModifierRepas($idrepas){
        $this->load->Model('Repas');
        $this->form_validation->set_rules('repas', 'repas', 'required');
        if ($this->form_validation->run() === false) {
            
            $data['error'] = validation_errors();
            
            $data['detail'] = $this->Repas->getAll("*");
            $this->load->view('modifierRepas',$data);

        } else {
            $this->Repas->updateRepas($idrepas,$_POST);
            $this->listeRepas();
        }
    }

}

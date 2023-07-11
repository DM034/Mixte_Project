<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {

	public function __construct()
    {
        parent::__construct();

        if(!$this->session->userdata('isConnected')){
            redirect('Welcome/index');          
        }
    }

    public function accueil_admin()
	{
        $data['content'] = "accueil_admin";
		$this->load->view('template_admin',$data);
	}	
		
    //Ajout
    public function ajout_repas()
	{
        $data['content'] = "ajout_repas";
		$this->load->view('template_admin',$data);
	}		
    public function ajout_sport()
	{
        $data['content'] = "ajout_sport";
		$this->load->view('template_admin',$data);
	}		
    public function ajout_regime()
	{
        $data['content'] = "ajout_regime";
		$this->load->view('template_admin',$data);
	}	

    //Modifier
    public function list_repas()
	{
        $data['content'] = "list_repas";
		$this->load->view('template_admin',$data);
	}		
    public function list_sport()
	{
        $data['content'] = "list_sport";
		$this->load->view('template_admin',$data);
	}		
    public function list_regime()
	{
        $data['content'] = "list_regime";
		$this->load->view('template_admin',$data);
	}		

	
    //Modification
    public function repas_modif()
	{
        $data['content'] = "repas_modif";
		$this->load->view('template_admin',$data);
	}		
    public function sport_modif()
	{
        $data['content'] = "sport_modif";
		$this->load->view('template_admin',$data);
	}		
    public function regime_modif()
	{
        $data['content'] = "regime_modif";
		$this->load->view('template_admin',$data);
	}		

    //Code
    public function validation_code()
	{
		$this->load->Model('Code');
        $data['content'] = "validation_code";
        $data['demande'] = $this->Code->listeDemandeCode();
		$this->load->view('template_admin',$data);
	}	
	
	public function deconnexion() {
        $this->session->sess_destroy();
        redirect('Welcome/index');
    }
}
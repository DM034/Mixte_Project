<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ClientController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    public function connecter(){
        $this->form_validation->set_rules('email', 'mail', 'required|valid_email');
        $this->form_validation->set_rules('pass', 'mot de passe', 'required');

        if($this->form_validation->run() === false){
            $data['error'] = validation_errors();
            $this->load->view('login',$data);
        } else {

            $this->load->Model('Client');
            $flag = $this->Client->se_connecter($_POST['email'],$_POST['pass']);

            if($flag != false){
                print_r('bienvenu');
                // mandefa anaty session
                // ...
            } else {
                $data['error'] = 'Verifier votre email ou mot de passe ';
                $this->load->view('login',$data);
            }
        }
    }	

    public function inscrire(){
        $this->form_validation->set_rules('email', 'mail', 'required|valid_email');
        $this->form_validation->set_rules('mdp', 'mot de passe', 'required');
        $this->form_validation->set_rules('taille','taille','required');
        $this->form_validation->set_rules('poids','poids','required');
        $this->form_validation->set_rules('nom','nom','required');
        $this->form_validation->set_rules('dtn','date de naissance','required');
        $this->form_validation->set_rules('prenom','prenom','required');

        if($this->form_validation->run() === false){
            $data['error'] = validation_errors();
            $this->load->view('inscription',$data);
        } else {

            $this->load->Model('Client');

            $this->Client->inscrire_utilisateur($_POST['email'],$_POST['mdp']);

            $idclient = $this->Client->idclient();

            $flag = $this->Client->inscrire_profil($_POST['nom'],$_POST['prenom'],$_POST['dtn'],$_POST['genre'],$_POST['taille'],$_POST['poids'],$idclient);

            if($flag != false){
                print_r('bienvenue');
                print_r($_POST['dtn']);
            
                // mandefa anaty session
                // ...
            } else {
                $data['error'] = 'Il y a eu une erreur';
                $this->load->view('inscription',$data);
            }
        }





    }
}

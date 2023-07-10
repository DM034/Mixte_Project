<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accueil extends CI_Controller {

	public function accueil()
	{
		$this->load->view('accueil');
	}		

    public function code()
	{
        $data['content'] = "code";
		$this->load->view('template',$data);
	}		


    public function choix()
	{
        $data['content'] = "choix";
		$this->load->view('template',$data);
	}		

    public function suggestion()
	{
        $data['content'] = "suggestion";
		$this->load->view('template',$data);
	}		

    public function formLoginAdmin(){
        $this->load->view('loginAdmin');
    }

    public function verifLoginAdmin(){
        $this->form_validation->set_rules('email', 'mail', 'required|valid_email');
        $this->form_validation->set_rules('pwd', 'mdp', 'required');

        if($this->form_validation->run() === false){
            $data['error'] = validation_errors();
            $this->load->view('loginAdmin',$data);
        } else {

            $this->load->Model('Admin');
            $flag = $this->Admin->loginValideAdmin($_POST['email'],$_POST['pwd']);

            if($flag != false){
                print_r('bienvenu');
                // mandefa anaty session
                // ...
            } else {
                $data['error'] = 'Erreur de mail ou mdp,reesayer';
                $this->load->view('loginAdmin',$data);
            }
        }
    }

    public function test(){
        $data['content'] = 'listeSport';
        $this->load->view('template',$data);
    }
}

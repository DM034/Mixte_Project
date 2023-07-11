<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

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

	public function index()
	{
		$this->load->view('accueil');
	}

	public function login_client()
	{
		$this->load->view('login');
	}

	public function inscription()
	{
		$this->load->view('inscription');
	}

	public function verifLoginAdmin()
	{
		$this->form_validation->set_rules('email', 'mail', 'required|valid_email');
		$this->form_validation->set_rules('pwd', 'mdp', 'required');

		if ($this->form_validation->run() === false) {
			$data['error'] = validation_errors();
			$this->load->view('loginAdmin', $data);
		} else {

			$this->load->Model('Admin');
			$flag = $this->Admin->loginValideAdmin($_POST['email'], $_POST['pwd']);

			if ($flag != false) {
				$this->session->set_userdata('admin', $flag);
				$this->session->set_userdata('isConnected', 1);

				redirect('AdminController/accueil_admin');
			} else {
				$data['error'] = 'Erreur de mail ou mdp,reesayer';
				$this->load->view('loginAdmin', $data);
			}
		}
	}
	public function formLoginAdmin()
	{
		$this->load->view('loginAdmin');
	}
}

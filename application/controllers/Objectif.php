<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Objectif extends CI_Controller {

    public function objectif()
	{
        $data['content'] = "objectif";
		$this->load->view('template',$data);
	}		
}
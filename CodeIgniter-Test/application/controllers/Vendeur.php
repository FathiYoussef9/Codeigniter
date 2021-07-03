<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendeur extends CI_Controller {


	public function __construct() {

		parent::__construct();

		$this->load->model('Vendeur_model');
		if($this->session->userdata('logged_in') !== TRUE) {
			redirect('Login');
		}
	}


	public function index()

	{

		if($this->session->userdata('Role')==='vendeur') {

            $data['result'] = $this->Vendeur_model->getAllData();
			$this->load->view('Vendeur_View', $data);
		} else {
			echo "Access Denied!";
		}
	}

	public function create(){
        $this->Vendeur_model->createData();
          redirect('Vendeur');
	}



}
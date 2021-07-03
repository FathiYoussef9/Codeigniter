<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Acheteur extends CI_Controller {


	public function __construct() {

		parent::__construct();
		if($this->session->userdata('logged_in') !== TRUE) {
			redirect('Login');
		}
	}


	public function index()
	{
		if($this->session->userdata('Role')==='acheteur') {
			$this->load->view('Acheteur_View');
		} else {
			echo "Access Denied!";
		}
	}

}
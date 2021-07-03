<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function __construct() {
		parent::__construct();
		$this->load->model('Login_model');
	}


	public function index()
	{
		$this->load->view('Login_view');
	}

    function auth(){
        $username = $this->input->post('username',TRUE);
        $password = $this->input->post('password',TRUE);
        $result = $this->Login_model->check_user($username,$password);
        if($result->num_rows() > 0){
          $data = $result->row_array();
		  $idUser = $data['Id'];
          $name  = $data['Login'];
			$email = $data['Email'];
			$role = $data['Role'];
			$sesdata = array(
				'Id'       => $idUser,
				'Login'  => $name,
				'Email'			=> $email,
				'Role'     => $role,
				'logged_in' => TRUE
			);
			$this->session->set_userdata($sesdata);
            if($role == 'vendeur'){
                redirect('Vendeur');
            }elseif ($role == 'acheteur') {
                redirect('Acheteur');
            }else{
                echo "<script>alert('access denied');history.go(-1);</script>";
            }

        }
    }

    function logout() {
		$this->session->sess_destroy();
		redirect('Login');
	}
}

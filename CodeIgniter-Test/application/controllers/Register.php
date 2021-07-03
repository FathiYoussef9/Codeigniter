<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct() {
		parent::__construct();
		
	}

    public function index()
	{
		$this->load->view('Register_view');
	}

    function validation(){
       // $this->form_validation->set_rules ('user_name','Login','required');
        //$this->form_validation->set_rules('user_email','Email','required');
        //$this->form_validation->set_rules('user_password','Password','required');


        $username = $this->input->post('user_name');
        $email = $this->input->post('user_email');
        $password = $this->input->post('user_password');
        $role = $this->input->post('user_role');

        $data=array(
            'Login'  => $username,
            'Email'			=> $email,
            'Password'    => $password,
            'Role'     => $role,
        );
         $this->db->insert('users_tbl', $data);
         redirect('Login');

     /*   if($this->form_validation->run()){
            $data=array(
                'Login'  => $username,
				'Email'			=> $email,
                'Password'    => $password,
				'Role'     => $role,
            );
             $this->Register_model->insert($data);

            

        }else {
            $this->index();
        }*/
    }
}
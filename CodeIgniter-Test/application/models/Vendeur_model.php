<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendeur_model extends CI_Model {
 
    public function __construct(){
        $this->load->database();
    }


   
    
    
    function createData(){
        if (count($_FILES) > 0) {
            if (is_uploaded_file($_FILES['userImage']['tmp_name'])) {
            $imgData = addslashes(file_get_contents($_FILES['userImage']['tmp_name']));
        $data = array(
          'Titre' => $this->input->post('titre'),
          'Description' => $this->input->post('desc'),
          'Prix' => $this->input->post('prix'),
          'Images' => $imgData,
          'emailVendeur' => $this->session->userdata('Email'),
        );
        $this->db->insert('produits',$data);
         }
    }      
   }


  function getAllData(){
      $query = $this->db->query('SELECT * FROM produits');
      return $query->result();
  }

}
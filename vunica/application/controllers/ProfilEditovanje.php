<?php

class ProfilEditovanje extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
    }
    
    function index(){
        $this->load->view('ProfilEditovanje');
    }
    
    function promeni(){ 
        //$this->session->Opis = $this->input->post('lokacija');
    }  
    
}

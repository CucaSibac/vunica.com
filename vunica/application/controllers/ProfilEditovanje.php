<?php

class ProfilEditovanje extends CI_Controller {
    
    function index(){
        $this->load->model('Korisnik');
        
        $this->load->view('ProfilEditovanje');
    }
    
    function promeni(){
        
        $this->session->Opis = $this->input->post('lokacija');
    }
    
    
}

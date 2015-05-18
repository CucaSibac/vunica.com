<?php

class ProfilEditovanje extends CI_Controller {
    
    private $podaci;
    private $kopija;
    
    function index(){
        $this->load->model('Korisnik');
        $this->podaci['korisnici'] = $this->Korisnik->ucitajKorisnika();
        
        $this->kopija = $this->podaci;
        
        $this->load->view('ProfilEditovanje', $this->podaci);
    }
    
    function promeni(){

        
    }
    
    
}

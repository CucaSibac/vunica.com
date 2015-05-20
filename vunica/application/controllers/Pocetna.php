<?php

class Pocetna extends CI_Controller {
    
    private $podaci;
    
    function index(){
        $this->load->model('Korisnik');
        $this->podaci['korisnici'] = $this->Korisnik->ucitajKorisnika();
        
        $this->load->view('Pocetna', $this->podaci);
    }
    
    
}


<?php

//Ivana Lisanin 5361/12

class BrisanjeNalogaTest extends CI_Controller {
    
     public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $this->load->library('unit_test');
        $this->ObrisiKorisnika1_Test();
        $this->ObrisiKorisnika2_Test();

    }
    
    // ()1) Funkcija koja testira
    public function ObrisiKorisnika1_Test(){
        $this->unit->run($this->obrisiKorisnika(51), true, 'Testiranje brisanja prvog korisnika');
    }    
    
    // ()2) Funkcija koja testira
    public function ObrisiKorisnika2_Test(){
        $this->unit->run($this->obrisiKorisnika(52), true, 'Testiranje brisanja drugog korisnika');
        echo $this->unit->report();
    }    
    
    public function obrisiKorisnika($vrednost) {
        $this->load->model('Obrisi_model');
        $this->Obrisi_model->obrisiKorisnika($vrednost);
        return true;
    }
}


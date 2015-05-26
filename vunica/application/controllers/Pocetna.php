<?php

class Pocetna extends CI_Controller {
    
    private $podaci;
    
    public function __construct() {
        parent::__construct();
        
        $podaci = array(
            'Prijave' => NULL,
            'Korisnici' => NULL,
            'Videi' => NULL,
            'Proizvodi' => NULL,
        );
    }
    
    public function index(){
        // Uspostavlja konekciju za modelima
        
        // Dohvate date podatke iz baze
        $this->podaci['Prijave'] = $this->dohvatiPrijave();
        $this->podaci['Korisnici'] = $this->dohvatiKorisnike();
        $this->podaci['Videi'] = $this->dohvatiVidee();
        $this->podaci['Proizvodi'] = $this->dohvatiProizvode();
        
        $this->load->view('Pocetna', $this->podaci);
    }
    
    protected function dohvatiPrijave(){
        $this->load->model('Prijave');
        return $this->Prijave->ucitavanjePrijava();
    }
    
    protected function dohvatiKorisnike(){
        return NULL;
    }
    
    protected function dohvatiVidee(){
        return NULL;
    }
    
    protected function dohvatiProizvode(){
        return NULL;
    }
    
    /* Funkcije koje sluze za manipulisanje prijavama */
    
    public function ucitajPrijave(){
        
    }

    public function pogledajMaterijal(){
        
    }
    
    public function obrisiPrijavu(){
        
    }
}


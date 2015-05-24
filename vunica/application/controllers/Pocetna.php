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
        $this->podaci['Korisnici'] = $this->dohvatiPrijave();
        $this->podaci['Videi'] = $this->dohvatiPrijave();
        $this->podaci['Proizvodi'] = $this->dohvatiPrijave();
        
        $this->load->view('Pocetna', $this->podaci);
    }
    
    protected function dohvatiPrijave(){
        return NULL;
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
    
}


<?php

// Teodora Aleksic, 391/12

class Pocetna extends CI_Controller {
    
    private $podaci;
    private $duzine;
    
    public function __construct() {
        parent::__construct();
        
        $podaci = array(
            'Prijave' => NULL,
            'Korisnici' => NULL,
            'Videi' => NULL,
            'Proizvodi' => NULL,
        );
        
        $duzine = array(
            'BrPrijave' => 0,
            'BrKorisnici' => 0,
        );
    }
    
    public function index(){
        // Ucitava modele
        $this->load->model('Prijave');
        $this->load->model('Korisnici');
        $this->load->model('NoviVidei');
        $this->load->model('NoviProizvodi');
        
        // Dohvate date podatke iz baze
        $this->podaci['Prijave'] = $this->Prijave->ucitavanjePrijava();
        //$this->duzine['BrPrijave'] = count($this->podaci['Prijave']);
        
        $this->podaci['Korisnici'] = $this->Korisnici->ucitavanjeKorisnika(0);
        //$this->duzine['BrKorisnici'] = $this->Korisnici->brojRedova();
        
        $this->podaci['Videi'] = $this->NoviVidei->ucitavanjeVidea($this->session->UserName);
        $this->podaci['Proizvodi'] = $this->NoviProizvodi->ucitavanjeProizvoda($this->session->UserName);
        
        $this->load->view('Pocetna', $this->podaci);
    }

    
    // Ubacuje pretplatu za premium korisnika u ceger
    public function premiumProfil(){
        $niz = $this->session->Proizvodi;
         
        $element = array(
            0 => 1,
            1 => 'Premium pretplata', 
            2 => 19,
            3 => 1
        );
        
        if($niz == ''){
            $niz[0] = $element;
        } 
        else{
            if($this->nadjiPretplatu($niz) == FALSE){
                $niz[count($niz)] = $element;
            }    
        }
        
        $this->session->Proizvodi = $niz;
        
        $greske = array(
            'Kartica' => 0,
            'Adresa' => 0,
        ); 
        
        $this->load->view('Ceger', $greske);
    }
    
    // Da li premium pretplata vec postoji u cegeru?
    protected function nadjiPretplatu($niz){
        foreach($niz as $red){
            if($red[0] == 1){
                return TRUE;
            }
        }
        return FALSE;
    }
    
}


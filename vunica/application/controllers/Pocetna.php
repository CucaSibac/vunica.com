<?php

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
            'NoviVidei' => NULL,
            'NoviProizvodi' => NULL,
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
        $this->duzine['BrKorisnici'] = $this->Korisnici->brojRedova();
        
        $this->podaci['Videi'] = $this->NoviVidei->ucitavanjeVidea($this->session->UserName);
        $this->podaci['Proizvodi'] = $this->NoviProizvodi->ucitavanjeProizvoda($this->session->UserName);
        
        $this->podaci['NoviVidei'] = $this->NoviVidei->ucitavanjeNovihVidea();
        $this->podaci['NoviProizvodi'] = $this->NoviProizvodi->ucitavanjeNovihProizvoda();
        
        $this->load->view('Pocetna', $this->podaci);
    }
    
    // Funkcije koje sluze za manipulisanje prijavama
    
    public function ucitajPrijave(){
        
    }
    
    public function obrisiPrijavu(){
        
    }
    
    // Funkcije koje sluze za manipulisanje korisnicima
    
    public function ucitajKorisnike($pocetak){
        $this->load->model('Korisnici');
        $this->podaci['Korisnici'] = $this->Korisnici->ucitavanjeKorisnika($pocetak);
        $this->load->view('PocetnaKorisnici', $this->podaci['Korisnici']);
    }
    
    public function obrisiKorisnika(){
        
    }
    
    // Ubacuje pretplatu za premium korisnika u ceger
    public function premiumProfil(){
        $niz = $this->session->Proizvodi;
        if($niz == ''){
            $niz[0] = '1';
        }
        else{
            $duzina = count($niz);
            $niz[$duzina] = '1';
        }
        $this->session->Proizvodi = $niz;
        
        $this->load->view('Ceger');
    }
    
}


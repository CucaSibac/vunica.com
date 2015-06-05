<?php

// Ivana Lisanin, 531/12
// Teodora Aleksic, 391/12

class Profil extends CI_Controller{
    
    private $podaci;
    
    public function __construct() {
        parent::__construct();
        
        $podaci = array(
            'Videi' => NULL,
            'Proizvodi' => NULL,
            'Korisnik' => NULL,
        );
    }
    
    public function index($id){
        $this->load->model('NoviVidei');
        $this->load->model('NoviProizvodi');
        $this->load->model('Korisnici');
        
        if($id == NULL){$id = '';}
        
        if($id == $this->session->IDKorisnik){
            $this->podaci['Korisnik'] = array(
                'IDKorisnik' => $this->session->IDKorisnik,
                'UserName' => $this->session->UserName,
                'ImePrezime' => $this->session->ImePrezime,
                'Godine' => $this->session->Godine,
                'Pol' => $this->session->Pol,
                'Lokacija' => $this->session->Lokacija,
                'Status' => $this->session->Status,
                'Slika' => $this->session->Slika,
                'Email' => $this->session->Email,
                'Opis' => $this->session->Opis,
            );
            
            $this->podaci['Videi'] = $this->NoviVidei->ucitavanjeVidea($this->session->UserName);
            $this->podaci['Proizvodi'] = $this->NoviProizvodi->ucitavanjeProizvoda($this->session->UserName);
        }
        else{
            $this->podaci['Korisnik'] = $this->Korisnici->ucitavanjeJednogKorisnika($id);
            $red = $this->podaci['Korisnik'];
            
            $this->podaci['Videi'] = $this->NoviVidei->ucitavanjeVidea($red['UserName']);
            $this->podaci['Proizvodi'] = $this->NoviProizvodi->ucitavanjeProizvoda($red['UserName']);
        }     
        
        $this->load->view('Profil', $this->podaci);
    }


    
}


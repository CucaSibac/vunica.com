<?php

class Profil extends CI_Controller{
    
    private $podaci;
    
    public function __construct() {
        parent::__construct();
        
        $podaci = array(
            'Videi' => NULL,
            'Proizvodi' => NULL,
        );
    }
    
    public function index(){
        $this->load->model('NoviVidei');
        $this->load->model('NoviProizvodi');
        
        $this->podaci['Videi'] = $this->NoviVidei->ucitavanjeVidea($this->session->UserName);
        $this->podaci['Proizvodi'] = $this->NoviProizvodi->ucitavanjeProizvoda($this->session->UserName);
        
        $this->load->view('Profil', $this->podaci);
    }


    
}


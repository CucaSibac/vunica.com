<?php

// Tijana Trifunovic 311/12 

class UklanjanjeProizvodaTest extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $this->load->library('unit_test');
        $this->ObrisiProizvod1_Test();
        $this->ObrisiProizvod2_Test();
    }
    
    // Prva funkcija koja testira
    public function ObrisiProizvod1_Test(){
        $this->unit->run($this->obrisiProizvod1(14), true, 'Testiranje brisanja proizvoda');
      
    }
     // Druga funkcija koja testira
    public function ObrisiProizvod2_Test(){
        $this->unit->run($this->obrisiProizvod2(15), true, 'Testiranje brisanja proizvoda');
        echo $this->unit->report();
    }
    
    
    // Prva funkcija koja se testira
     public function obrisiProizvod1($vrednost) {
        $this->load->model('Obrisi_model');
        $this->Obrisi_model->obrisiProizvod($vrednost);
        return true;
    }
    //Druga funkcija koja se testira
    public function obrisiProizvod2($vrednost) {
        $this->load->model('Obrisi_model');
        $this->Obrisi_model->obrisiProizvod($vrednost);
        return true;
    }

}
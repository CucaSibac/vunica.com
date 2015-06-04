<?php

// Tijana Trifunovic 311/12 

class UklanjanjeKomentaraTest extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $this->load->library('unit_test');
        $this->ObrisiKomentarVideo_Test();
        $this->ObrisiKomentarProizvod_Test();
    }
    
    // Prva funkcija koja testira
    public function ObrisiKomentarVideo_Test(){
        $this->unit->run($this->obrisiKomentarVideo(21), true, 'Testiranje brisanja komentara sa video-a');
        echo $this->unit->report();
    }
     // Druga funkcija koja testira
    public function ObrisiKomentarProizvod_Test(){
        $this->unit->run($this->obrisiKomentarProizvod(31), true, 'Testiranje brasanja komentara sa proizvoda');
        echo $this->unit->report();
    }
    
    
    // Prva funkcija koja se testira
     public function obrisiKomentarVideo($vrednost) {
        $this->load->model('Obrisi_model');
        $this->Obrisi_model->obrisiKomentarVideo($vrednost);
        return true;
    }
    //Druga funkcija koja se testira
    public function obrisiKomentarProizvod($vrednost) {
        $this->load->model('Obrisi_model');
        $this->Obrisi_model->obrisiKomentarProizvod($vrednost);
        return true;
    }

}
<?php

// Teodora Aleksic, 391/12

class PostavljanjeKomentaraTest {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $this->load->library('unit_test');
        $this->komentar_Test();
    }
    
    // (1) Funkcija koja testira
    public function komentar_Test(){
        $this->unit->run($this->komentar('Ovo je test komentar1'), TRUE, 'Testiranje postavljanja komentara');
        echo $this->unit->report();
    }
    
    // (1) Funkcija koja se testira
    public function komentar($tekst) {
        $refering_url = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
        if ($tekst !== "") {
            $this->load->model('Video_model');
            $this->Video_model->novikomentar();
            $this->session->unset_userdata('tekstGreska');
            return TRUE;
        } else {
            $this->session->set_userdata('tekstGreska', 'true');
            return FALSE;
        }
    }
}

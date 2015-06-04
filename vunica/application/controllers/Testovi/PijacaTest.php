<?php

// Teodora Aleksic, 391/12

class PijacaTest {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $this->load->library('unit_test');
        $this->get_proizvod_Test();
        //$this->index_Pijaca_Test();
    }
    
    // (1) Funkcija koja testira
    public function get_proizvod_Test(){
        $this->unit->run($this->get_proizvod(0), TRUE, 'Testiranje postavljanja komentara');
        echo $this->unit->report();
    }
    
    // (1) Funkcija koja se testira
    function get_proizvod($offset) {
        $this->load->model('Pijaca_model');
        $niz['latest_proizvod'] = $this->Pijaca_model->get_proizvod($offset);
        $this->load->view('get_proizvod', $niz);
        return TRUE;
    }
    
    
    // (2) Funkcija koja testira
    public function index_Pijaca_Test(){
        $this->unit->run($this->index_Pijaca(), TRUE, 'Testiranje postavljanja komentara');
        echo $this->unit->report();
    }
    
    // (2) Funkcija koja se testira
    public function index_Pijaca() {
        $this->load->model('Pijaca_model');
        $niz['num_proizvod'] = $this->Pijaca_model->num_proizvod();
        $niz['latest_proizvod'] = $this->Pijaca_model->get_proizvod();
        //$this->load->view('Pijaca', $niz);
        return TRUE;
    }
    
}

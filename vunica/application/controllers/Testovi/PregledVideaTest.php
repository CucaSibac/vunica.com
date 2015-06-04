<?php

// Tijana Trifunovic 311/12 

class PregledVideaTest extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->library('unit_test');
        $this->Ucitaj1_Test();
        $this->Ucitaj2_Test();
    }

    // Prva funkcija koja testira
    public function Ucitaj1_Test() {
        $this->unit->run($this->ucitaj1(9), true, 'Testiranje pregleda videa');
    }

    // Druga funkcija koja testira
    public function Ucitaj2_Test() {
        $this->unit->run($this->ucitaj2(9), true, 'Testiranje pregleda videa');
        echo $this->unit->report();
    }

    //Prva funkcija koja se testira
    public function ucitaj1($vrednost) {
        $this->load->model('Video_model');
        $niz['podaci'] = $this->Video_model->getAllForVideo($vrednost);
        $niz['num_messages'] = $this->Video_model->num_messages($vrednost);
        $niz['latest_messages'] = $this->Video_model->get_messages($vrednost);
        if ($niz['podaci'] == null) {
            return false;
        } else {
            return true;
        }
    }
    //Druga funkcija koja se testira
    public function ucitaj2($vrednost) {
        $this->load->model('Video_model');
        $niz['podaci'] = $this->Video_model->getAllForVideo($vrednost);
        $niz['num_messages'] = $this->Video_model->num_messages($vrednost);
        $niz['latest_messages'] = $this->Video_model->get_messages($vrednost);
        if ($niz['num_messages'] == null) {
            return false;
        } else {
            return true;
        }
    }

}

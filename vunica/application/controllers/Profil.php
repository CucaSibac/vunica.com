<?php

class Profil extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        $this->load->view('Profil');
        //$nizk['kolicinap'] = $this->Profil_model->broj_proizvod();
       // $nizk['poslednjip'] = $this->Profil_model->uzmi_proizvod();
        //$nizk['kolicinav'] = $this->Profil_model->broj_video();
        //$nizk['poslednjiv'] = $this->Profil_model->uzmi_video();
       // $this->load->view('Profil', $nizk);
    }

    function broj_proizvod($offset) {
        $this->load->model('Profil_model');
        $nizk['poslednjip'] = $this->Profil_model->uzmi_proizvod($offset);
        $this->load->view('get_proizvod', $nizk);
    }
    
}


<?php
//Ivana Lisanin 531/12

class ProfilEditovanjeTest extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $this->load->library('unit_test');
        $this->proveraEmail_Test();
        $this->proveraGodine_Test();
    }
    
    // (1) Funkcija koja testira
    public function proveraEmail_Test(){
        $this->unit->run($this->proveraEmail(), NULL, 'Testiranje unosa mail-a');
        
    }
    
    // (2) Funkcija koja testira
    public function proveraGodine_Test(){
        $this->unit->run($this->proveraGodine(),NULL,"Testiranje validnosti unosa godina");
        echo $this->unit->report();
    }


    // (1) Funkcija koja se testira
   protected function proveraEmail(){
        if($this->input->post('email') != '' && $this->input->post('emailPotvrda') != ''){
            $this->form_validation->set_rules('email', 'E-mail', 'trim|valid_email|max_length[40]');
            $this->form_validation->set_rules('emailPotvrda', 'E-mail potvrda', 'trim|matches[email]');
            if($this->form_validation->run() == TRUE){
                return $this->input->post('email');
                // proveriti kasnije da li ovaj email vec postoji u bazi
            }
            $this->greske['Email'] = 1;
        }
        if($this->input->post('email') != '' || $this->input->post('emailPotvrda') != ''){
            $this->greske['Email'] = 1;
        }
        
        return NULL;
    }
    
    // (2) Funkcija koja se testira
    protected function proveraGodine(){
        if($this->input->post('godine') != ''){
            $this->form_validation->set_rules('godine', 'Godine', 'trim|numeric|is_natural|greater_than[0]|less_than[151]');
            if($this->form_validation->run() == TRUE){
                return $this->input->post('godine');
            }
            $this->greske['Godine'] = 1;
        }
        
        return NULL;
    }


}


<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pijaca
 *
 * @author Tijana Trifunovic 311/12
 */
class Pijaca extends CI_Controller {

    public function index() {
        $this->load->model('Pijaca_model');
        $niz['num_proizvod'] = $this->Pijaca_model->num_proizvod();
        $niz['latest_proizvod'] = $this->Pijaca_model->get_proizvod();
        $this->load->view('Pijaca', $niz);
    }

    function get_proizvod($offset) {
        $this->load->model('Pijaca_model');
        $niz['latest_proizvod'] = $this->Pijaca_model->get_proizvod($offset);
        $this->load->view('get_proizvod', $niz);
    }
    function sessionsCod($value) {
        $this->session->set_userdata('CenaOd', $value );
    }
    function unsessionsCod() {
         $this->session->set_userdata('CenaOd', "");
    }
    
    
    function sessions1() {
        $this->session->set_userdata('Vunica', "Cekirano");
    }
    function unsessions1() {
         $this->session->set_userdata('Vunica', "");
    }

     function sessions2() {
        $this->session->set_userdata('Konci', "Cekirano");
    }
    function unsessions2() {
         $this->session->set_userdata('Konci', "");
    }
    function sessions3() {
        $this->session->set_userdata('Igle', "Cekirano");
    }
    function unsessions3() {
         $this->session->set_userdata('Igle', "");
    }
     function sessions4() {
        $this->session->set_userdata('MatOstalo', "Cekirano");
    }
    function unsessions4() {
         $this->session->set_userdata('MatOstalo', "");
    }
    function sessions5() {
        $this->session->set_userdata('PGarderoba', "Cekirano");
    }
    function unsessions5() {
         $this->session->set_userdata('PGarderoba', "");
    }
    
    function sessions6() {
        $this->session->set_userdata('PDodaci', "Cekirano");
    }
    function unsessions6() {
         $this->session->set_userdata('PDodaci', "");
    }
    
    function sessions7() {
        $this->session->set_userdata('PIgracke', "Cekirano");
    }
    function unsessions7() {
         $this->session->set_userdata('PIgracke', "");
    }
    
    function sessions8() {
        $this->session->set_userdata('POstalo', "Cekirano");
    }
    function unsessions8() {
         $this->session->set_userdata('POstalo', "");
    }
    
    
    function sessionsD1() {
        $this->session->set_userdata('PDatum', "Najnovije");
        $this->session->set_userdata('PNaziv', "");
        $this->session->set_userdata('PCena', "");
    }
    
    function sessionsD2() {
        $this->session->set_userdata('PDatum', "Najstarije");
       $this->session->set_userdata('PNaziv', "");
        $this->session->set_userdata('PCena', "");
    }
    function unsessionsD() {
         $this->session->set_userdata('PDatum', "");
         $this->session->set_userdata('PNaziv', "");
        $this->session->set_userdata('PCena', "");
    }
    
    function sessionsN1() {
        $this->session->set_userdata('PDatum', "");
        $this->session->set_userdata('PNaziv', "A-Z");
        $this->session->set_userdata('PCena', "");
    }
    
    function sessionsN2() {
        $this->session->set_userdata('PDatum', "");
        $this->session->set_userdata('PNaziv', "Z-A");
        $this->session->set_userdata('PCena', "");
    }
    function unsessionsN() {
         $this->session->set_userdata('PDatum', "");
          $this->session->set_userdata('PNaziv', "");
          $this->session->set_userdata('PCena', "");
    }
    
    function sessionsC1() {
        $this->session->set_userdata('PDatum', "");
        $this->session->set_userdata('PNaziv', "");
        $this->session->set_userdata('PCena', "Najvisa");
    }
    
    function sessionsC2() {
        $this->session->set_userdata('PDatum', "");
        $this->session->set_userdata('PNaziv', "");
        $this->session->set_userdata('PCena', "Najniza");
    }
    function unsessionsC() {
         $this->session->set_userdata('PDatum', "");
          $this->session->set_userdata('PNaziv', "");
          $this->session->set_userdata('PCena', "");
    }
    
    
    
}

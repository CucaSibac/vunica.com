<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Strikarnica
 *
 * @author Tijana Trifunovic 311/12
 */
class Strikarnica extends CI_Controller {

    public function index() {
        $this->load->model('Strikarnica_model');
        $niz['num_videos'] = $this->Strikarnica_model->num_videos();
        $niz['latest_videos'] = $this->Strikarnica_model->get_videos();
        $this->load->view('Strikarnica', $niz);
    }

    function get_videos($offset) {
        $this->load->model('Strikarnica_model');
        $niz['latest_videos'] = $this->Strikarnica_model->get_videos($offset);
        $this->load->view('get_videos', $niz);
    }
    
    function sessions1() {
        $this->session->set_userdata('Laka', "Cekirano");
    }
    function unsessions1() {
         $this->session->set_userdata('Laka', "");
    }
    
     function sessions2() {
        $this->session->set_userdata('Srednja', "Cekirano");
    }
    function unsessions2() {
         $this->session->set_userdata('Srednja', "");
    }

    function sessions3() {
        $this->session->set_userdata('Teska', "Cekirano");
    }
    function unsessions3() {
         $this->session->set_userdata('Teska', "");
    }
    
    function sessions4() {
        $this->session->set_userdata('Garderoba', "Cekirano");
    }
    function unsessions4() {
         $this->session->set_userdata('Garderoba', "");
    }
    
    function sessions5() {
        $this->session->set_userdata('Dodaci', "Cekirano");
    }
    function unsessions5() {
         $this->session->set_userdata('Dodaci', "");
    }
    
    function sessions6() {
        $this->session->set_userdata('Igracke', "Cekirano");
    }
    function unsessions6() {
         $this->session->set_userdata('Igracke', "");
    }
    
    
    function sessions7() {
        $this->session->set_userdata('Ostalo', "Cekirano");
    }
    function unsessions7() {
         $this->session->set_userdata('Ostalo', "");
    }
    
    
    function sessionsD1() {
        $this->session->set_userdata('Datum', "Najnovije");
        $this->session->set_userdata('Naziv', "");
    }
    
    function sessionsD2() {
        $this->session->set_userdata('Datum', "Najstarije");
        $this->session->set_userdata('Naziv', "");
    }
    function unsessionsD() {
         $this->session->set_userdata('Datum', "");
          $this->session->set_userdata('Naziv', "");
    }
    
    
    function sessionsN1() {
        $this->session->set_userdata('Datum', "");
        $this->session->set_userdata('Naziv', "A-Z");
    }
    
    function sessionsN2() {
        $this->session->set_userdata('Datum', "");
        $this->session->set_userdata('Naziv', "Z-A");
    }
    function unsessionsN() {
         $this->session->set_userdata('Datum', "");
          $this->session->set_userdata('Naziv', "");
    }
    }
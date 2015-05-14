 <?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 
 class Vunica extends CI_Controller {
    function index() {
        $niz['tekst'] = "danas je cetvrtak";
        $niz['drugitekst'] = "sutra je petak";
        $this->load->view('Index', $niz);
    }
    
    function pocetna(){
        $this->load->view('Pocetna');
    }
    
    function strikarnica() {
        $this->load->view('Strikarnica');
    }
    
    function pijaca() {
        $this->load->view('Pijaca');
    }
    
    function video() {
        $this->load->model('Vunica_model');
        $niz['podaci'] = $this->Vunica_model->getAllForVideo();
        /*$niz['komentari'] = $this->Vunica_model->getAllForComments();*/
        $this->load->view('Video', $niz);
    }
    
    function proizvod() {
        $this->load->view('Proizvod');
    }
    
 }

<?php

/*
 * potrebno je pored &vredn koja predstavlja IDProizvod staviti i $vrednk koji predstavlja IDKorisnik
 * ovo se stavlja kada je korisnik ulogovan
 * ne znam kako ovo da citam iz baze
 */

class Proizvod extends CI_Controller {
    
    public function index($vredn) {
        $this->load->model('Proizvod_model');
        $nizp['podacip'] = $this->Proizvod_model->getAllForProizvod($vredn);
        $nizp['ucegeru'] = $this->Proizvod_model->dohvatiKolicinu($vredn);
        $nizp['num_messagesp'] = $this->Proizvod_model->num_messagesp($vredn);
        $nizp['latest_messagesp'] = $this->Proizvod_model->get_messagesp($vredn);
        $this->load->view('Proizvod', $nizp);
    }

    function get_messages($vredn, $offset ) {
        $this->load->model('Proizvod_model');
        $nizp['latest_messagesp'] = $this->Proizvod_model->get_messagesp($vredn, $offset);
        $this->load->view('get_messages', $nizp);
    }
}


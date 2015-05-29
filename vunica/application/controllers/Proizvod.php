<?php

/*
 * potrebno je pored &vredn koja predstavlja IDProizvod staviti i $vrednk koji predstavlja IDKorisnik
 * ovo se stavlja kada je korisnik ulogovan
 * ne znam kako ovo da citam iz baze
 */

class Proizvod extends CI_Controller {

    public $niz;
    private $element;

    public function __construct() {
        parent::__construct();
        $this->load->model('Proizvod_model');

        $this->element = array(
            'id' => '',
            'ime' => $this->input->post('arg'),
            'kolicina' => $this->input->post('v'),
            'cena' => ''
        );
    }

    public function postavljanje($argument) {
        // $this->element['id'] = 
        $this->element['ime'] = $argument;
        // $this->element['cena'] = 

        $this->niz = $this->session->Proizvodi;
        if ($this->niz == '') {
            $this->niz[0] = $this->element;
        } else {
            $this->niz[count($this->niz)] = $this->element;
        }
        $this->session->Proizvodi = $this->niz;
        echo $this->element['ime'];
    }

    public function index($vredn) {
        $this->load->model('Proizvod_model');
        $nizp['podacip'] = $this->Proizvod_model->getAllForProizvod($vredn);
        $nizp['num_messagesp'] = $this->Proizvod_model->num_messagesp($vredn);
        $nizp['latest_messagesp'] = $this->Proizvod_model->get_messagesp($vredn);
        $this->load->view('Proizvod', $nizp);
    }

    function get_messages($vredn, $offset) {
        $this->load->model('Proizvod_model');
        $nizp['latest_messagesp'] = $this->Proizvod_model->get_messagesp($vredn, $offset);
        $this->load->view('get_messages', $nizp);
    }

    public function komentarp() {
        $refering_url = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
        if ($this->input->post('Tekst') !== "") {
            $this->load->model('Proizvod_model');
            $this->Video_model->new_komentar();
            $this->session->unset_userdata('tekstpGreska');
        } else {
            $this->session->ser_userdata('tekstpGreska', 'true');
        }
        redirect($refering_url, 'refresh');
    }

    function unsetall1p() {
        $this->session->unset_userdata('Laka');
        $this->session->unset_userdata('Srednja');
        $this->session->unset_userdata('Teska');
        $this->session->unset_userdata('Garderoba');
        $this->session->unset_userdata('Dodaci');
        $this->session->unset_userdata('Igracke');
        $this->session->unset_userdata('Ostalo');
        $this->session->unset_userdata('Datum');
        $this->session->unset_userdata('Naziv');
        $this->session->unset_userdata('CenaOd');
        $this->session->unset_userdata('CenaDo');
        $this->session->unset_userdata('Vunica');
        $this->session->unset_userdata('Konci');
        $this->session->unset_userdata('Igle');
        $this->session->unset_userdata('MatOstalo');
        $this->session->unset_userdata('PGarderoba');
        $this->session->unset_userdata('PDodaci');
        $this->session->unset_userdata('PIgracke');
        $this->session->unset_userdata('POstalo');
        $this->session->unset_userdata('PDatum');
        $this->session->unset_userdata('PNaziv');
        $this->session->unset_userdata('PCena');
        $this->session->set_userdata('PGarderoba', "Cekirano");
    }

    function unsetall2p() {

        $this->session->unset_userdata('Laka');
        $this->session->unset_userdata('Srednja');
        $this->session->unset_userdata('Teska');
        $this->session->unset_userdata('Garderoba');
        $this->session->unset_userdata('Dodaci');
        $this->session->unset_userdata('Igracke');
        $this->session->unset_userdata('Ostalo');
        $this->session->unset_userdata('Datum');
        $this->session->unset_userdata('Naziv');
        $this->session->unset_userdata('CenaOd');
        $this->session->unset_userdata('CenaDo');
        $this->session->unset_userdata('Vunica');
        $this->session->unset_userdata('Konci');
        $this->session->unset_userdata('Igle');
        $this->session->unset_userdata('MatOstalo');
        $this->session->unset_userdata('PGarderoba');
        $this->session->unset_userdata('PDodaci');
        $this->session->unset_userdata('PIgracke');
        $this->session->unset_userdata('POstalo');
        $this->session->unset_userdata('PDatum');
        $this->session->unset_userdata('PNaziv');
        $this->session->unset_userdata('PCena');
        $this->session->set_userdata('PDodaci', "Cekirano");
    }

    function unsetall3p() {
        $this->session->unset_userdata('Laka');
        $this->session->unset_userdata('Srednja');
        $this->session->unset_userdata('Teska');
        $this->session->unset_userdata('Garderoba');
        $this->session->unset_userdata('Dodaci');
        $this->session->unset_userdata('Igracke');
        $this->session->unset_userdata('Ostalo');
        $this->session->unset_userdata('Datum');
        $this->session->unset_userdata('Naziv');
        $this->session->unset_userdata('CenaOd');
        $this->session->unset_userdata('CenaDo');
        $this->session->unset_userdata('Vunica');
        $this->session->unset_userdata('Konci');
        $this->session->unset_userdata('Igle');
        $this->session->unset_userdata('MatOstalo');
        $this->session->unset_userdata('PGarderoba');
        $this->session->unset_userdata('PDodaci');
        $this->session->unset_userdata('PIgracke');
        $this->session->unset_userdata('POstalo');
        $this->session->unset_userdata('PDatum');
        $this->session->unset_userdata('PNaziv');
        $this->session->unset_userdata('PCena');
        $this->session->set_userdata('PIgracke', "Cekirano");
    }

    function unsetall4p() {
        $this->session->unset_userdata('Laka');
        $this->session->unset_userdata('Srednja');
        $this->session->unset_userdata('Teska');
        $this->session->unset_userdata('Garderoba');
        $this->session->unset_userdata('Dodaci');
        $this->session->unset_userdata('Igracke');
        $this->session->unset_userdata('Ostalo');
        $this->session->unset_userdata('Datum');
        $this->session->unset_userdata('Naziv');
        $this->session->unset_userdata('CenaOd');
        $this->session->unset_userdata('CenaDo');
        $this->session->unset_userdata('Vunica');
        $this->session->unset_userdata('Konci');
        $this->session->unset_userdata('Igle');
        $this->session->unset_userdata('MatOstalo');
        $this->session->unset_userdata('PGarderoba');
        $this->session->unset_userdata('PDodaci');
        $this->session->unset_userdata('PIgracke');
        $this->session->unset_userdata('POstalo');
        $this->session->unset_userdata('PDatum');
        $this->session->unset_userdata('PNaziv');
        $this->session->unset_userdata('PCena');
        $this->session->set_userdata('Igle', "Cekirano");
    }

    function unsetall5p() {
        $this->session->unset_userdata('Laka');
        $this->session->unset_userdata('Srednja');
        $this->session->unset_userdata('Teska');
        $this->session->unset_userdata('Garderoba');
        $this->session->unset_userdata('Dodaci');
        $this->session->unset_userdata('Igracke');
        $this->session->unset_userdata('Ostalo');
        $this->session->unset_userdata('Datum');
        $this->session->unset_userdata('Naziv');
        $this->session->unset_userdata('CenaOd');
        $this->session->unset_userdata('CenaDo');
        $this->session->unset_userdata('Vunica');
        $this->session->unset_userdata('Konci');
        $this->session->unset_userdata('Igle');
        $this->session->unset_userdata('MatOstalo');
        $this->session->unset_userdata('PGarderoba');
        $this->session->unset_userdata('PDodaci');
        $this->session->unset_userdata('PIgracke');
        $this->session->unset_userdata('POstalo');
        $this->session->unset_userdata('PDatum');
        $this->session->unset_userdata('PNaziv');
        $this->session->unset_userdata('PCena');
        $this->session->set_userdata('Konci', "Cekirano");
    }

    function unsetall6p() {
        $this->session->unset_userdata('Laka');
        $this->session->unset_userdata('Srednja');
        $this->session->unset_userdata('Teska');
        $this->session->unset_userdata('Garderoba');
        $this->session->unset_userdata('Dodaci');
        $this->session->unset_userdata('Igracke');
        $this->session->unset_userdata('Ostalo');
        $this->session->unset_userdata('Datum');
        $this->session->unset_userdata('Naziv');
        $this->session->unset_userdata('CenaOd');
        $this->session->unset_userdata('CenaDo');
        $this->session->unset_userdata('Vunica');
        $this->session->unset_userdata('Konci');
        $this->session->unset_userdata('Igle');
        $this->session->unset_userdata('MatOstalo');
        $this->session->unset_userdata('PGarderoba');
        $this->session->unset_userdata('PDodaci');
        $this->session->unset_userdata('PIgracke');
        $this->session->unset_userdata('POstalo');
        $this->session->unset_userdata('PDatum');
        $this->session->unset_userdata('PNaziv');
        $this->session->unset_userdata('PCena');
        $this->session->set_userdata('Vunica', "Cekirano");
    }

    function unsetall7p() {
        $this->session->unset_userdata('Laka');
        $this->session->unset_userdata('Srednja');
        $this->session->unset_userdata('Teska');
        $this->session->unset_userdata('Garderoba');
        $this->session->unset_userdata('Dodaci');
        $this->session->unset_userdata('Igracke');
        $this->session->unset_userdata('Ostalo');
        $this->session->unset_userdata('Datum');
        $this->session->unset_userdata('Naziv');
        $this->session->unset_userdata('CenaOd');
        $this->session->unset_userdata('CenaDo');
        $this->session->unset_userdata('Vunica');
        $this->session->unset_userdata('Konci');
        $this->session->unset_userdata('Igle');
        $this->session->unset_userdata('MatOstalo');
        $this->session->unset_userdata('PGarderoba');
        $this->session->unset_userdata('PDodaci');
        $this->session->unset_userdata('PIgracke');
        $this->session->unset_userdata('POstalo');
        $this->session->unset_userdata('PDatum');
        $this->session->unset_userdata('PNaziv');
        $this->session->unset_userdata('PCena');
        $this->session->set_userdata('POstalo', "Cekirano");
    }

}

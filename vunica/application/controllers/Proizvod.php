<?php

// Tijana Trifunovic 311/12

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
        $nizp['num_messagesp'] = $this->Proizvod_model->num_messages($vredn);
        $nizp['latest_messagesp'] = $this->Proizvod_model->get_messages($vredn);
        $this->load->view('Proizvod', $nizp);
    }

    function get_messages($vredn, $offset) {
        $this->load->model('Proizvod_model');
        $nizp['latest_messagesp'] = $this->Proizvod_model->get_messages($vredn, $offset);
        $this->load->view('get_messagesp', $nizp);
    }

     
    public function komentar() {
        $refering_url = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
        if ($this->input->post('Tekst') !== "") {
            $this->load->model('Proizvod_model');
            $this->Proizvod_model->novikomentar();
            $this->session->unset_userdata('tekstpGreska');
        } else {
            $this->session->set_userdata('tekstpGreska', 'true');
        }
        redirect($refering_url, 'refresh');
    }
    
    

    function unsetall1() {
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

    function unsetall2() {

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

    function unsetall3() {
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

    function unsetall4() {
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
        $this->session->set_userdata('MatOstalo', "Cekirano");
    }

    function unsetall5() {
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

    function unsetall6() {
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

    function unsetall7() {
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
    function unsetall8() {
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

    
    function StaviUCeger(){
        $refering_url = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
        $data = array (
            'IDProizvod' => ($this->input->post('IDProizvod')),
            'NazivProizvoda' => ($this->input->post('NazivProizvoda')),
            'Cena' => ($this->input->post('Cena')),
            'KolicinaForma' => ($this->input->post('KolicinaForma'))
    );
       
        $nizProizvoda = $this->session->Proizvodi;
        
        $duzina = count($nizProizvoda);
        if (!$this->session->Proizvodi) {
            $duzina = 0;
        }
        $nizProizvoda[$duzina] = $data;
        $this->session->set_userdata('Proizvodi', $nizProizvoda);
        redirect($refering_url, 'refresh');
    }
}

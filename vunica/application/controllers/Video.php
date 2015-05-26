<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Video
 *
 * @author Tijana Trifunovic 311/12
 */
class Video extends CI_Controller {

    public function index($vrednost) {
        $this->load->model('Video_model');
        $niz['podaci'] = $this->Video_model->getAllForVideo($vrednost);
        $niz['num_messages'] = $this->Video_model->num_messages($vrednost);
        $niz['latest_messages'] = $this->Video_model->get_messages($vrednost);
        $this->load->view('Video', $niz);
    }

    function get_messages($vrednost, $offset) {
        $this->load->model('Video_model');
        $niz['latest_messages'] = $this->Video_model->get_messages($vrednost, $offset);
        $this->load->view('get_messages', $niz);
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
        $this->session->set_userdata('Laka', "Cekirano");
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
        $this->session->set_userdata('Srednja', "Cekirano");
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
        $this->session->set_userdata('Teska', "Cekirano");
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
        $this->session->set_userdata('Garderoba', "Cekirano");
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
        $this->session->set_userdata('Dodaci', "Cekirano");
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
        $this->session->set_userdata('Igracke', "Cekirano");
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
        $this->session->set_userdata('Ostalo', "Cekirano");
    }

}

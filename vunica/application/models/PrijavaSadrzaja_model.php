<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PrijavaSadrzaja_model
 *
 * @author Tijana Trifunovic
 */
class PrijavaSadrzaja_model extends CI_Model {

    function prijaviKomentarVideo() {
        if ($this->input->post('Tekst') !== "") {
            $data = array(
                'UserName' => ($this->session->UserName),
                'IDKomentar' => ($this->input->post('IDKomentar1')),
                'Komentar' => ($this->input->post('Tekst')),
                'Datum' => (date("Y.m.d"))
            );
        } else {
            $data = array(
                'UserName' => ($this->session->UserName),
                'IDKomentar' => ($this->input->post('IDKomentar1')),
                'Komentar' => ("Sadrzaj je neprikladan"),
                'Datum' => (date("Y.m.d"))
            );
        }
        $this->db->insert('prijavakomentarvideo', $data);
    }
    
    function prijaviKomentarProizvod() {
        if ($this->input->post('Tekst') !== "") {
            $data = array(
                'UserName' => ($this->session->UserName),
                'IDKomentar' => ($this->input->post('IDKomentar')),
                'Komentar' => ($this->input->post('Tekst')),
                'Datum' => (date("Y.m.d"))
            );
        } else {
            $data = array(
                'UserName' => ($this->session->UserName),
                'IDKomentar' => ($this->input->post('IDKomentar')),
                'Komentar' => ("Sadrzaj je neprikladan"),
                'Datum' => (date("Y.m.d"))
            );
        }
        $this->db->insert('prijavakomentarproizvod', $data);
    }
    
    function prijaviVideo() {
        if ($this->input->post('Tekst') !== "") {
            $data = array(
                'UserName' => ($this->session->UserName),
                'IDVideo' => ($this->session->videoId),
                'Komentar' => ($this->input->post('Tekst')),
                'Datum' => (date("Y.m.d"))
            );
        } else {
            $data = array(
                'UserName' => ($this->session->UserName),
                'IDVideo' => ($this->session->videoId),
                'Komentar' => ("Sadrzaj je neprikladan"),
                'Datum' => (date("Y.m.d"))
            );
        }
        $this->db->insert('prijavavideo', $data);
    }
    
    function prijaviProizvod() {
        if ($this->input->post('Tekst') !== "") {
            $data = array(
                'UserName' => ($this->session->UserName),
                'IDProizvod' => ($this->session->proizvodId),
                'Komentar' => ($this->input->post('Tekst')),
                'Datum' => (date("Y.m.d"))
            );
        } else {
            $data = array(
                'UserName' => ($this->session->UserName),
                'IDProizvod' => ($this->session->proizvodId),
                'Komentar' => ("Sadrzaj je neprikladan"),
                'Datum' => (date("Y.m.d"))
            );
        }
        $this->db->insert('prijavaproizvod', $data);
    }

}

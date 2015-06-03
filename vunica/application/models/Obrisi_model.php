<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Obrisi_model
 *
 * @author Tijana Trifunovic
 */
class Obrisi_model extends CI_Model {
    function obrisiKomentarVideo($vrednost) {
        $this->db->where('IDKomentar', $vrednost);
        $this->db->delete('komentarvideo');
    }
    
    function obrisiKomentarProizvod($vrednost) {
        $this->db->where('IDKomentar', $vrednost);
        $this->db->delete('komentarproizvod');
    }
    
    function obrisiVideo($vrednost) {
        $this->db->where('IDVideo', $vrednost);
        $this->db->delete('video');
    }
    
    function obrisiProizvod($vrednost) {
        $this->db->where('IDProizvod', $vrednost);
        $this->db->delete('proizvod');
    }
    
    function obrisiKorisnika($vrednost) {
        $this->db->where('IDKorisnik', $vrednost);
        $this->db->delete('korisnik');
    }
    
    function obrisiPrijavaKomentarProizvod($vrednost) {
        $this->db->where('IDPrijava', $vrednost);
        $this->db->delete('prijavakomentarproizvod');
    }
    
    function obrisiPrijavaKomentarVideo($vrednost) {
        $this->db->where('IDPrijava', $vrednost);
        $this->db->delete('prijavakomentarvideo');
    }
    
    function obrisiPrijavaProizvod($vrednost) {
        $this->db->where('IDPrijava', $vrednost);
        $this->db->delete('prijavaproizvod');
    }
    
    function obrisiPrijavaVideo($vrednost) {
        $this->db->where('IDPrijava', $vrednost);
        $this->db->delete('prijavavideo');
    }
}

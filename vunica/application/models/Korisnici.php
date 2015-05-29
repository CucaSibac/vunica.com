<?php

// Teodora Aleksic, 391/12

class Korisnici extends CI_Model {
    
    private $korisnici;
    
    public function __construct() {
        parent::__construct();
        
        $this->korisnici = NULL;
    }
    
    // Ucitava 5 korisnika iz baze od reda $pocetak
    public function ucitavanjeKorisnika($pocetak){
        $this->db->order_by('DatumPoslednjegLogovanja', 'desc');
        $upit = $this->db->get('korisnik', 5, $pocetak);
        
        return $upit->result();
    }
    
    // Ucitava sve korisnike iz baze.
    public function brojRedova(){
        $this->db->select('*');
        $this->db->from('korisnik');
        $upit = $this->db->get();
        
        return count($upit->result());
    }
    
}

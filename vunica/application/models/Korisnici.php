<?php

// Teodora Aleksic, 391/12

class Korisnici extends CI_Model {
    
    private $korisnici;
    
    public function __construct() {
        parent::__construct();
        
        $this->korisnici = NULL;
    }
    
    // Ucitava sve korisnike iz baze
    public function ucitavanjeKorisnika($pocetak){
        $this->db->order_by('DatumPoslednjegLogovanja', 'desc');
        
        //$upit = $this->db->get('korisnik', 5, $pocetak);
        
        $this->db->select('*');
        $this->db->from('korisnik');
        $upit = $this->db->get();
        
        return $upit->result();
    }
    
    // Ucitava jednog korisnike iz baze prema id-u
    public function ucitavanjeJednogKorisnika($id){
        $this->db->select('*');
        $this->db->from('korisnik');
        $this->db->where('IDKorisnik', $id);
        
        $upit = $this->db->get();
        
        if($upit->num_rows() > 0){
            foreach($upit->result() as $red){
                $korisnik = array(
                    'IDKorisnik' => $red->IDKorisnik,
                    'UserName' => $red->UserName,
                    'ImePrezime' => $red->ImePrezime,
                    'Godine' => $red->Godine,
                    'Pol' => $red->Pol,
                    'Lokacija' => $red->Lokacija,
                    'Status' => $red->Status,
                    'Slika' => $red->Slika,
                    'Email' => $red->Email,
                    'Opis' => $red->Opis,
                );
            }
        }
        
        return $korisnik;
    }
    
}

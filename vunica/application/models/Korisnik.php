<?php


class Korisnik extends CI_Model {
    
    function ucitajKorisnika(){
        $this->db->select('*');
        $this->db->from('korisnik k');
        $this->db->where('k.IDKorisnik', 4);
        
        $rezultat = $this->db->get();

        if($rezultat->num_rows() > 0){
            foreach ($rezultat->result() as $red){
                $korisnici[] = $red;
            }
        }
        
        return $korisnici;  
    }
    
    function promeni($korisnik){
        
        // ako mejl vec postoji nema nista
        // inace update-uj
        
    }
    
}


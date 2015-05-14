<?php


class Vunica_model extends CI_Model {
    //funkcija dohvata sve podatke koje su potrebne za video iz tabela Video, Korisnik, ProduktKorisnik za stranu video
    function getAllForVideo() {
        $this->db->select('v.Naziv, v.Opis, v.Tezina, v.Kategorija, k.UserName, pk.Datum, v.Video');
        $this->db->from('video v');
        $this->db->join('ProduktKorisnika pk', 'pk.IDProdukt = v.IDProdukt', 'left');
        $this->db->join('Korisnik k', 'k.IDKorisnik = pk.IDKorisnik', 'left');
        $this->db->where('v.IDProdukt', 1);
        
        $upit = $this->db->get();
        if($upit->num_rows() > 0) {
            foreach ($upit->result() as $red){
                $niz[] = $red;
            }
        }
        //print_r($niz);
        return $niz;
    }
    
    //funkcija dohvata sve podatke koji su potrebni za komentare(za stranu video, moze i za proizvod) iz tabela
    function getAllForComments() {
        
    }
}

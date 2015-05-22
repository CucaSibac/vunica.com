<?php

class Proizvod_model extends CI_Model{

    function getAllForProizvod($vredn) {
        $nizp = null;
        $this->db->select('*');
        $this->db->from('proizvod');
        $this->db->where('IDProizvod', $vredn);
        
        $upit = $this->db->get();
        if($upit->num_rows() > 0) {
            foreach ($upit->result() as $red){
                $nizp[] = $red;
            }
        }
        return $nizp;
    }
    
    function dohvatiKolicinu($vredn){
        $this->db->select('*');
        $this->db->from('kupovinapojedinacno');
        //potrebno je postaviti i proveru korisnika po IDKorisnik ali to nakon sto je korisnik ulogovan
        $this->db->where('IDProizvod', $vredn);
        
        $upit = $this->db->get();
        if($upit->num_rows() > 0) {
            foreach ($upit->result() as $red){
                $nizp[] = $red;
            }
        }
        return $nizp;
    }
    
    function get_messagesp($vredn, $offset = 0 ){
        $this->db->where('IDProizvod', $vredn);
        $this->db->order_by('IDKomentar', 'desc');
	$query = $this->db->get('komentarproizvod', 3, $offset);
	return $query->result();
    }
    
    
    function num_messagesp($vredn) {
        $this->db->where('IDProizvod', $vredn);
        $query = $this->db->count_all_results('komentarproizvod');
        echo $query;
	return $query;
    }
}


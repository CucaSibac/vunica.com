<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */




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
    
  /*  function dohvatiKolicinu($vredn){
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
    */
    function get_messages($vrednost, $offset = 0 ){
        $this->db->select('komentarproizvod.IDKomentar, komentarproizvod.UserName, komentarproizvod.Datum, komentarproizvod.Vreme, komentarproizvod.Tekst, komentarproizvod.IDProizvod, prijavakomentarproizvod.Komentar');
        $this->db->where('IDProizvod', $vrednost);
        $this->db->order_by('komentarproizvod.IDKomentar', 'desc');
        $this->db->join('prijavakomentarproizvod', 'prijavakomentarproizvod.IDKomentar = komentarproizvod.IDKomentar', 'left');
        $this->db->group_by('komentarproizvod.IDKomentar');
	$query = $this->db->get('komentarproizvod', 3, $offset);
	return $query->result();
    }
    
    
    function num_messages($vredn) {
        $this->db->where('IDProizvod', $vredn);
        $query = $this->db->count_all_results('komentarproizvod');
     //   echo $query;
	return $query;
    }
    
    function novikomentar() {
        $data = array (
            'UserName' => ($this->input->post('UserName')),
                    'Datum' => (date("Y.m.d")),
                    'Vreme' => (date("H:i:s")),
                    'Tekst' => ($this->input->post('Tekst')),
                    'IDProizvod' => ($this->input->post('IDProizvod'))
    );
        $this->db->insert('komentarproizvod', $data);
    }
}
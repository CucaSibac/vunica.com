<?php

// Teodora Aleksic, 391/12

class NoviProizvodi extends CI_Model {
    
    private $proizvodi;
    
    public function __construct() {
        parent::__construct();
        
        $this->proizvodi = NULL;
    }
    
    public function ucitavanjeProizvoda($id) {
        $this->db->select('*');
        $this->db->from('proizvod');
         $this->db->where('UserName', $id);
        $this->db->order_by('Datum', 'desc');
        
        $upit = $this->db->get();  
        
        return $upit->result();
    }
}

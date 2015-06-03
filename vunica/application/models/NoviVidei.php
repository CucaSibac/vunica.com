<?php

// Teodora Aleksic, 391/12

class NoviVidei extends CI_Model {
    
    private $videi;
    
    public function __construct() {
        parent::__construct();
        
        $this->videi = NULL;
    }
    
    public function ucitavanjeVidea($id) {
        $this->db->select('*');
        $this->db->from('video');
        $this->db->where('UserName', $id);
        $this->db->order_by('Datum', 'desc');
        
        $upit = $this->db->get();  
        
        return $upit->result();
    }
}

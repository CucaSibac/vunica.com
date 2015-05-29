<?php

// Teodora Aleksic, 391/12

class NoviVidei extends CI_Model {
    
    private $videi;
    
    public function __construct() {
        parent::__construct();
        
        $this->videi = NULL;
    }
    
    public function ucitavanjeNovihVidea() {
        $this->db->select('*');
        $this->db->from('video');
        $this->db->order_by('Datum', 'desc');
        
        $upit = $this->db->get();
        if($upit->num_rows() > 0){
            $i = 0;
            foreach ($upit->result() as $red){
                $this->videi[$i] = $red;
                $i++;
                if($i == 4){
                    break;
                }
            }
        }   
        
        return $this->videi;
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

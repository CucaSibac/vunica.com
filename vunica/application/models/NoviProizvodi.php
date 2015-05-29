<?php

// Teodora Aleksic, 391/12

class NoviProizvodi extends CI_Model {
    
    private $proizvodi;
    
    public function __construct() {
        parent::__construct();
        
        $this->proizvodi = NULL;
    }
    
    public function ucitavanjeNovihProizvoda() {
        $this->db->select('*');
        $this->db->from('proizvod');
        $this->db->order_by('Datum', 'desc');
        
        $upit = $this->db->get();
        if($upit->num_rows() > 0){
            $i = 0;
            foreach ($upit->result() as $red){
                $this->proizvodi[$i] = $red;
                $i++;
                if($i == 4){
                    break;
                }
            }
        }   
        
        return $this->proizvodi;
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

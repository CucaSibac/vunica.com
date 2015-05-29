<?php

class ProizvodEditovanje_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
    
   function dohvati_proizvod($id){
       $this->db->from("proizvod");
       $this->db->where("IDProizvod", $id);     
       $query = $this->db->get();
       if ($query->num_rows() > 0) {
           foreach ($query->result() as $rows)  return $rows;
       }
       else return false;              
   }
   
    
}


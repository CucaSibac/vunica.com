<?php

// Milos Andric, 206/12

class ProizvodEditovanje_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
    
  public function dohvati_proizvod($id){
       $this->db->from("proizvod");
       $this->db->where("IDProizvod", $id);     
       $query = $this->db->get();
       if ($query->num_rows() > 0) {
           foreach ($query->result() as $rows)  return $rows;
       }
       else return false;              
   }
   
  public  function brisanje_slike($id){
       $date = array('Slika' => '');
       $this->db->from("proizvod");
       $this->db->where("IDProizvod", $id);      
       $this->db->update("proizvod",$date);       
   }
   
   public function ubacivanje_slike($id,$slika){
       $date = array('Slika' => $slika);
       $this->db->from("proizvod");
       $this->db->where("IDProizvod", $id);      
       $this->db->update("proizvod",$date);
   }
   
   public function dohvati_sliku($id){
       $this->db->from("proizvod");
       $this->db->where("IDProizvod", $id);
       $query = $this->db->get();
       if ($query->num_rows() > 0) {
           foreach ($query->result() as $rows)  {            
               return $rows->Slika;              
           }
       }
   }
   
   public function postavi_id($src){
        $this->session->set_flashdata('IDPro',$src);
    }
    
     public function izmeni_proizvod($id){                 
          $data = array(           
            'Datum' => (date("Y.m.d")),
            'Naziv' => $this->input->post('ProNaziv'),    
            'Opis' => $this->input->post('ProOpis'),
            'BrojArtikala' => $this->input->post('ProKol'),
            'Cena' => $this->input->post('ProCena'),   
            'Kategorija' => $this->input->post('ProKat')
        );
        $this->db->from("proizvod");
        $this->db->where("IDProizvod", $id);      
        $this->db->update("proizvod",$data);
    }
    
    
}


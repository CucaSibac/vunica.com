<?php

class PostavljanjeProizvoda_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
    
    public function postavi_sliku($src){
        $this->session->set_flashdata('proSlika',$src);
    }
    
    public function ubaci_proizvod(){
          $this->session->userdata('IDKorisnik');
          
          
          $data = array(           
            'UserName' => $this->session->userdata('UserName'),
            'Datum' => (date("Y.m.d")),
            'Naziv' => $this->input->post('ProNaziv'),    
            'Opis' => $this->input->post('ProOpis'),
            'BrojArtikala' => $this->input->post('ProKol'),
            'Cena' => $this->input->post('ProCena'), 
            'Slika' => $this->session->userdata('proSlika'),
            'Kategorija' => $this->input->post('ProKat')
        );      
        $this->db->insert('proizvod', $data);            
    }
    
}

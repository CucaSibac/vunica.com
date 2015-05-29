<?php

// Milos Andric, 206/12

class PostavljanjeVidea_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
    
    public function postavi_video($src){
        $this->session->set_flashdata('proVideo',$src);
    }
    
    public function ubaci_video(){                           
          $data = array(           
            'UserName' => $this->session->userdata('UserName'),
            'Datum' => (date("Y.m.d")),
            'Naziv' => $this->input->post('vidNaziv'),    
            'Opis' => $this->input->post('vidOpis'),
     //     'Slika' => $this->session->userdata('proSlika'),
            'Video' => $this->session->userdata('proVideo'),                   
            'Kategorija' => $this->input->post('vidKat'),
            'Tezina' => $this->input->post('vidTez')
        );      
        $this->db->insert('video', $data);            
    }
    
}
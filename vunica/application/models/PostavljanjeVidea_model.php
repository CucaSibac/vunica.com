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
        if($this->input->post('vidKat') == "Garderoba") $data['Slika'] = 'http://vunica.azurewebsites.net/vunica/application/Slike/Strikarnica/Garderoba.jpg';
        if($this->input->post('vidKat') == "Dodaci") $data['Slika'] = 'http://vunica.azurewebsites.net/vunica/application/Slike/Strikarnica/Dodaci.jpg';
        if($this->input->post('vidKat') == "Igracke") $data['Slika'] = 'http://vunica.azurewebsites.net/vunica/application/Slike/Strikarnica/Igracke.jpg';
        if($this->input->post('vidKat') == "Ostalo") $data['Slika'] = 'http://vunica.azurewebsites.net/vunica/application/Slike/Strikarnica/Ostalo.jpg';
        $this->db->insert('video', $data);            
    }
    
}
<?php

class ProfilEditovanje extends CI_Controller {
    
    private $podaci;
    private $kopija;
    
    function index(){
        $this->load->model('Korisnik');
        $this->podaci['korisnici'] = $this->Korisnik->ucitajKorisnika();
        
        $this->kopija = $this->podaci;

        if(($this->session->userdata('UserName')!="")){
            $set_data = $this->session->all_userdata();
        }
        else{
            $set_data = array(
                'IDKorisnik'   =>'',
                'UserName'  =>'',      
                'ImePrezime' =>'',
                'Status' => '',
                'Slika' => 'http://localhost/Slike/Profilna/Nedefinisano.jpg',
                'Email'     => '',
                'Opis'     => '',
                'logged_in' => FALSE,
            );
        }
        
        $this->load->view('ProfilEditovanje', $this->podaci, $set_data);
    }
    
    function promeni(){

        
    }
    
    
}

<?php

class PopUp_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function dodaj_korisnika() {
        $data = array(
            'ImePrezime' => ($this->input->post('ImePrezime')),
            'UserName' => $this->input->post('UserName'),
            'Email' => $this->input->post('Email'),
            'Sifra' => ($this->input->post('Sifra')),
            'DatumPoslednjegLogovanja' => (date("Y.m.d")),
            'Slika' => ('http://localhost/Slike/Profilna/Nedefinisano.jpg'),
        );
        $this->session->set_userdata($data);
        $this->db->insert('korisnik', $data);
    }

    function login($email, $sifra) { 
        $this->db->from("korisnik");
        $this->db->where("Email", $email);
        $this->db->where("Sifra", $sifra);       
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $rows) {          
                //add all data to session
                $date = array(                 
                    'DatumPoslednjegLogovanja' => (date("Y.m.d"))
                ); 
                $this->db->from("korisnik");
                $this->db->where("IDKorisnik", $rows->IDKorisnik);
                $this->db->update("korisnik",$date);
                $newdata = array(
                    'IDKorisnik' => $rows->IDKorisnik,
                    'UserName' => $rows->UserName,
                    'ImePrezime' => $rows->ImePrezime,
                    'Godine' => $rows->Godine,
                    'Pol' => $rows->Pol,
                    'Lokacija' => $rows->Lokacija,
                    'BrojProizvoda' => 0,
                    'Proizvodi' => '',
                    'Status' => $rows->Status,
                    'Slika' => $rows->Slika,
                    'Email' => $rows->Email,
                    'Opis' => $rows->Opis,
                    'logged_in' => TRUE,
                );
            }
            $this->session->set_userdata($newdata);
            return true;
        }
        return false;
    }
    
    public function logout()
    {
        $newdata = array(
        'IDKorisnik'   =>'',
        'UserName'  =>'',      
        'ImePrezime' =>'',
        'Godine' => '',
        'Pol' => '',
        'Lokacija' => '',
        'BrojProizvoda' => 0,
        'Proizvodi' => '',   
        'Status' => '',
        'Slika' => 'http://localhost/Slike/Profilna/Nedefinisano.jpg',
        'Email'     => '',
        'Opis'     => '',
        'logged_in' => FALSE,
        );
        $this->session->unset_userdata($newdata );
        $this->session->sess_destroy();
    }

}

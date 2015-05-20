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
            'DatumPoslednjegLogovanja' => (date("Y.m.d"))
        );
        $this->db->insert('korisnik', $data);
    }

    function login($email, $sifra) {
        //$this->db->from('korisnik k');
        $this->db->where("Email", $email);
        $this->db->where("Sifra", $sifra);

        $query = $this->db->get("korisnik");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $rows) {
                //add all data to session
                $newdata = array(
                    'IDKorisnik' => $rows->IDKorisnik,
                    'UserName' => $rows->UserName,
                    'Email' => $rows->Email,
                    'logged_in' => TRUE,
                );
            }
            $this->session->set_userdata($newdata);
            return true;
        }
        return false;
    }

}

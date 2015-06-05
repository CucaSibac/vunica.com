<?php
/* Milos Andric 206/12 */
class Test_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
    
    public function nadji_video($id){
        $this->db->from("video");
        $this->db->where("IDVideo", $id);      
        $query = $this->db->get();
        if ($query->num_rows() > 0)
            return true;
        else 
            return false;
        }               
         
        function prijaviVideo() {
        if ($this->input->post('Tekst') !== "") {
            $data = array(
                'UserName' => ($this->session->UserName),
                'IDVideo' => ($this->session->videoId),
                'Komentar' => ("Sadrzaj je neprikladan"),
                'Datum' => (date("Y.m.d"))
            );
        } else {
            $data = array(
                'UserName' => ($this->session->UserName),
                'IDVideo' => ($this->session->videoId),
                'Komentar' => ("Sadrzaj je neprikladan"),
                'Datum' => (date("Y.m.d"))
            );
        }
        $this->db->insert('prijavavideo', $data);
    }
    
    function prijaviProizvod() {
        if ($this->input->post('Tekst') !== "") {
            $data = array(
                'UserName' => ($this->session->UserName),
                'IDProizvod' => ($this->session->proizvodId),
                'Komentar' => ("Sadrzaj je neprikladan"),
                'Datum' => (date("Y.m.d"))
            );
        } else {
            $data = array(
                'UserName' => ($this->session->UserName),
                'IDProizvod' => ($this->session->proizvodId),
                'Komentar' => ("Sadrzaj je neprikladan"),
                'Datum' => (date("Y.m.d"))
            );
        }
        $this->db->insert('prijavaproizvod', $data);
    }
}
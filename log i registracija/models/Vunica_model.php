<?php


class Vunica_model extends CI_Model {
	public function __construct()
 {
  parent::__construct();
 }

    //funkcija dohvata sve podatke koje su potrebne za video iz tabela Video, Korisnik, ProduktKorisnik za stranu video
    function getAllForVideo() {
        $this->db->select('v.Naziv, v.Opis, v.Tezina, v.Kategorija, k.UserName, pk.Datum, v.Video');
        $this->db->from('video v');
        $this->db->join('ProduktKorisnika pk', 'pk.IDProdukt = v.IDProdukt', 'left');
        $this->db->join('Korisnik k', 'k.IDKorisnik = pk.IDKorisnik', 'left');
        $this->db->where('v.IDProdukt', 1);
        
        $upit = $this->db->get();
        if($upit->num_rows() > 0) {
            foreach ($upit->result() as $red){
                $niz[] = $red;
            }
        }
        //print_r($niz);
        return $niz;
    }
    
    //funkcija dohvata sve podatke koji su potrebni za komentare(za stranu video, moze i za proizvod) iz tabela
    function getAllForComments() {
        
    }
	
	public function add_user()
	 {
	  $data=array(
		'UserName'=>$this->input->post('UserName'),
		'Ime'=>($this->input->post('Ime')),
		'Email'=>$this->input->post('Email'),
		'Sifra'=>($this->input->post('Sifra')),
		'DatumPoslednjegLogovanja'=>(date("Y.m.d"))
	  );
	  $this->db->insert('korisnik',$data);
	 }
	 
	  function login($email,$sifra)
	 {
	  //$this->db->from('korisnik k');
	  $this->db->where("Email",$email);
	  $this->db->where("Sifra",$sifra);

	  $query=$this->db->get("korisnik");
	  if($query->num_rows()>0)
	  {
	   foreach($query->result() as $rows)
	   {
		//add all data to session
		$newdata = array(
		  'IDKorisnik'  => $rows->IDKorisnik,
		  'UserName'  => $rows->UserName,
		  'Email'    => $rows->Email,
		  'logged_in'  => TRUE,
		);
	   }
	   $this->session->set_userdata($newdata);
	   return true;
	  }
	  return false;
	 }
 
}

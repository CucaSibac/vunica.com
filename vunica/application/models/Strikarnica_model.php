<!-- Tijana Trifunovic 311/12-->
<?php


class Strikarnica_model extends CI_Model {
    //funkcija dohvata sve podatke koje su potrebne za video iz tabela Video, Korisnik, ProduktKorisnik za stranu video
    /*function getAllVideo() {
        $this->db->select('*');
        $this->db->from('video');
        $this->db->order_by("Datum", "desc");
        
        $upit = $this->db->get();
        if($upit->num_rows() > 0) {
            foreach ($upit->result() as $red){
                $niz[] = $red;
            }
        }
        //print_r($niz);
        return $niz;
    }*/
    
    function get_videos($offset = 0){
        $Laka = $this->session->Laka;
        $Srednja = $this->session->Srednja;
        $Teska = $this->session->Teska;
        $Garderoba = $this->session->Garderoba;
        $Dodaci = $this->session->Dodaci;
        $Igracke = $this->session->Igracke;
        $Ostalo = $this->session->Ostalo;
        $Datum = $this->session->Datum;
        $Naziv = $this->session->Naziv;
        $tezina = array();
        $kategorija = array();
        
        //Proverava da li su neke od tezina cekirane, i na kraju ako jesu, selektuje cekirane
        if ($Laka == "Cekirano") {
            array_push($tezina, "Laka");
        }
        if ($Srednja == "Cekirano") {
            array_push($tezina, "Srednja");
        }
        if ($Teska == "Cekirano") {
            array_push($tezina, "Teska");
        }
        if(count($tezina)>0) {
            $this->db->where_in('Tezina', $tezina);
        }
        
        
        //Proverava da li su neke od kategorija cekirane, i ako jesu, selektuje cekirane
        if ($Garderoba == "Cekirano") {
            array_push($kategorija, "Garderoba");
        }
        if ($Dodaci == "Cekirano") {
            array_push($kategorija, "Dodaci");
        }
        if ($Igracke == "Cekirano") {
            array_push($kategorija, "Igracke");
        }
        if ($Ostalo == "Cekirano") {
            array_push($kategorija, "Ostalo");
        }
        if(count($kategorija)>0) {
            $this->db->where_in('Kategorija', $kategorija);
        }
        
        
        if ($Datum == "Najstarije") {
            $this->db->order_by('Datum', 'asc');
        } else if ($Naziv == "A-Z") {
            $this->db->order_by('Naziv', 'asc');
        } else if($Naziv == "Z-A" ) {
            $this->db->order_by('Naziv', 'desc');
        } else{
            $this->db->order_by('Datum', 'desc');
        }
        
        //$this->db->order_by('IDVideo', 'desc');
	$query = $this->db->get('Video', 8, $offset);
	return $query->result();
    }
    
    
    function num_videos() {
        $Laka = $this->session->Laka;
        $Srednja = $this->session->Srednja;
        $Teska = $this->session->Teska;
        $Garderoba = $this->session->Garderoba;
        $Dodaci = $this->session->Dodaci;
        $Igracke = $this->session->Igracke;
        $Ostalo = $this->session->Ostalo;
        $Datum = $this->session->Datum;
        $Naziv = $this->session->Naziv;
        $tezina = array();
        $kategorija = array();
        
        //Proverava da li su neke od tezina cekirane, i na kraju ako jesu, selektuje cekirane
        if ($Laka == "Cekirano") {
            array_push($tezina, "Laka");
        }
        if ($Srednja == "Cekirano") {
            array_push($tezina, "Srednja");
        }
        if ($Teska == "Cekirano") {
            array_push($tezina, "Teska");
        }
        if(count($tezina)>0) {
            $this->db->where_in('Tezina', $tezina);
        }
        
        
        //Proverava da li su neke od kategorija cekirane, i ako jesu, selektuje cekirane
        if ($Garderoba == "Cekirano") {
            array_push($kategorija, "Garderoba");
        }
        if ($Dodaci == "Cekirano") {
            array_push($kategorija, "Dodaci");
        }
        if ($Igracke == "Cekirano") {
            array_push($kategorija, "Igracke");
        }
        if ($Ostalo == "Cekirano") {
            array_push($kategorija, "Ostalo");
        }
        if(count($kategorija)>0) {
            $this->db->where_in('Kategorija', $kategorija);
        }
        
        
        if ($Datum == "Najstarije") {
            $this->db->order_by('Datum', 'asc');
        } else if ($Naziv == "A-Z") {
            $this->db->order_by('Naziv', 'asc');
        } else if($Naziv == "Z-A" ) {
            $this->db->order_by('Naziv', 'desc');
        } else{
            $this->db->order_by('Datum', 'desc');
        }
        $query = $this->db->count_all_results('video');
	return $query;
    }
}

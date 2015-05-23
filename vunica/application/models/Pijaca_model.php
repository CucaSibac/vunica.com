<!-- Tijana Trifunovic 311/12-->
<?php


class Pijaca_model extends CI_Model {
    
    function get_proizvod($offset = 0){
        
        //citanje iz sesije
        $CenaOd = $this->session->CenaOd;
        $CenaDo = $this->session->CenaDo;
        $Vunica = $this->session->Vunica;
        $Konci = $this->session->Konci;
        $Igle = $this->session->Igle;
        $MatOstalo = $this->session->MatOstalo;
        $PGarderoba = $this->session->PGarderoba;
        $PDodaci = $this->session->PDodaci;
        $PIgracke = $this->session->PIgracke;
        $POstalo = $this->session->POstalo;
        $PDatum = $this->session->PDatum;
        $PNaziv = $this->session->PNaziv;
        $PCena = $this->session->PCena;
        
       
        $kategorija = array();
        $Materijali = array();
        
        //Proverava da li su podesene cene
        if ($CenaOd != 0) {
            $this->db->where('Cena >=', $CenaOd);
        }
        if ($CenaDo != 0) {
            $this->db->where('Cena <=', $CenaDo);
        }
        
        
        //Proverava da li su neki od materijala cekirani, i ako jesu, selektuje cekirane
        if ($Vunica == "Cekirano") {
            array_push($Materijali, "Vunica");
        }
        if ($Konci == "Cekirano") {
            array_push($Materijali, "Konci");
        }
        if ($Igle == "Cekirano") {
            array_push($Materijali, "Igle");
        }
        if ($MatOstalo == "Cekirano") {
            array_push($Materijali, "MatOstalo");
        }
        if(count($Materijali)>0) {
            $this->db->where_in('Kategorija', $Materijali);
        }
        
        //Proverava da li su neke od kategorija cekirane, i ako jesu, selektuje cekirane
        if ($PGarderoba == "Cekirano") {
            array_push($kategorija, "PGarderoba");
        }
        if ($PDodaci == "Cekirano") {
            array_push($kategorija, "PDodaci");
        }
        if ($PIgracke == "Cekirano") {
            array_push($kategorija, "PIgracke");
        }
        if ($POstalo == "Cekirano") {
            array_push($kategorija, "POstalo");
        }
        if(count($kategorija)>0) {
            $this->db->where_in('Kategorija', $kategorija);
        }
        
        if ($PDatum == "Najstarije") {
            $this->db->order_by('Datum', 'asc');
        } else if ($PNaziv == "A-Z") {
            $this->db->order_by('Naziv', 'asc');
        } else if($PNaziv == "Z-A" ) {
            $this->db->order_by('Naziv', 'desc');
        } else if($PCena == "Najvisa") {
            $this->db->order_by('Cena', 'desc');
        } else if ($PCena == "Najniza") {
            $this->db->order_by('Cena', 'asc');
        } else{
            $this->db->order_by('Datum', 'desc');
        }
        
       // $this->db->order_by('IDProizvod', 'desc');
	$query = $this->db->get('proizvod', 8, $offset);
	return $query->result();
    }
    
    
    function num_proizvod() {
        
        //citanje iz sesije
        $CenaOd = $this->session->CenaOd;
        $CenaDo = $this->session->CenaDo;
        $Vunica = $this->session->Vunica;
        $Konci = $this->session->Konci;
        $Igle = $this->session->Igle;
        $MatOstalo = $this->session->MatOstalo;
        $PGarderoba = $this->session->PGarderoba;
        $PDodaci = $this->session->PDodaci;
        $PIgracke = $this->session->PIgracke;
        $POstalo = $this->session->POstalo;
        $PDatum = $this->session->PDatum;
        $PNaziv = $this->session->PNaziv;
        $PCena = $this->session->PCena;
        
       
        $kategorija = array();
        $Materijali = array();
        
        //Proverava da li su podesene cene
        if ($CenaOd != 0) {
            $this->db->where('Cena >=', $CenaOd);
        }
        if ($CenaDo != 0) {
            $this->db->where('Cena <=', $CenaDo);
        }
        
        
        //Proverava da li su neki od materijala cekirani, i ako jesu, selektuje cekirane
        if ($Vunica == "Cekirano") {
            array_push($Materijali, "Vunica");
        }
        if ($Konci == "Cekirano") {
            array_push($Materijali, "Konci");
        }
        if ($Igle == "Cekirano") {
            array_push($Materijali, "Igle");
        }
        if ($MatOstalo == "Cekirano") {
            array_push($Materijali, "MatOstalo");
        }
        if(count($Materijali)>0) {
            $this->db->where_in('Kategorija', $Materijali);
        }
        
        //Proverava da li su neke od kategorija cekirane, i ako jesu, selektuje cekirane
        if ($PGarderoba == "Cekirano") {
            array_push($kategorija, "PGarderoba");
        }
        if ($PDodaci == "Cekirano") {
            array_push($kategorija, "PDodaci");
        }
        if ($PIgracke == "Cekirano") {
            array_push($kategorija, "PIgracke");
        }
        if ($POstalo == "Cekirano") {
            array_push($kategorija, "POstalo");
        }
        if(count($kategorija)>0) {
            $this->db->where_in('Kategorija', $kategorija);
        }
        
        if ($PDatum == "Najstarije") {
            $this->db->order_by('Datum', 'asc');
        } else if ($PNaziv == "A-Z") {
            $this->db->order_by('Naziv', 'asc');
        } else if($PNaziv == "Z-A" ) {
            $this->db->order_by('Naziv', 'desc');
        } else if($PCena == "Najvisa") {
            $this->db->order_by('Cena', 'desc');
        } else if ($PCena == "Najniza") {
            $this->db->order_by('Cena', 'asc');
        } else{
            $this->db->order_by('Datum', 'desc');
        }
        
        $query = $this->db->count_all_results('proizvod');
	return $query;
    }
}

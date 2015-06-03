<?php

// Teodora Aleksic, 391/12
// Ivana Lisanin, 531/12

class Kupovina extends CI_Model {
    
    private $kupovina;
    private $idKupovine;
    private $proizvod;


    public function __construct() {
        parent::__construct();
        
        $this->kupovina = array(
            'UserName' => $this->session->UserName,
            
            'PostanskiBroj' => '',
            'Grad' => '',
            'Ulica' => '',       
            'Broj' => '',
            
            'VrstaKreditneKartice' => '',
            'SigurnosniBroj' => '',
            'BrojKreditneKartice' => '',
            'DatumIsteka' => '',
            
            'DatumKupovine' => '',
            'Iznos' => '', 
        );
        
        $this->proizvod = array(
            'BrojArtikala' => '',
        );
        
        $this->idKupovine = '';
    }
    
    // Belezi ukupnu kupovinu
    public function kupi($proizvodi){
        if($this->proveriStanje($proizvodi['Proizvodi'])){
        
            $this->kupovina['PostanskiBroj'] = $proizvodi['PostanskiBroj'];
            $this->kupovina['Grad'] = $proizvodi['Grad'];
            $this->kupovina['Ulica'] = $proizvodi['Ulica'];
            $this->kupovina['Broj'] = $proizvodi['Broj'];

            $this->kupovina['VrstaKreditneKartice'] = $proizvodi['VrstaKartice'];
            $this->kupovina['SigurnosniBroj'] = $proizvodi['SigurnosniBroj'];
            $this->kupovina['BrojKreditneKartice'] = $proizvodi['BrojKartice'];
            $this->kupovina['DatumIsteka'] = $proizvodi['DatumIsteka'];

            $this->kupovina['DatumKupovine'] = $proizvodi['DatumKupovine'];
            $this->kupovina['Iznos'] = $proizvodi['Iznos'];

            $this->db->insert('kupovinaukupno', $this->kupovina); 

            $this->idKupovine = $this->vratiID();

            $niz = $proizvodi['Proizvodi'];
            $i = 0;
            for(;$i < count($niz);$i++){
                $this->kupiPojedinacno($niz[$i]);
            }
            
            return TRUE;
        }
        else{
            return FALSE; 
        }
    }
    
    // Provera stanje proizvoda u bazi
    protected function proveriStanje($niz){
        foreach ($niz as $red){
            $kolicina = $this->vratiKolicinu($red);
            if($kolicina < $red[3]){
                return FALSE;
            }
        }
        return TRUE;
    }
    
    // Vraca kolicinu svakog proizvoda u bazi
    protected function vratiKolicinu($red){
        $this->db->select('BrojArtikala');
        $this->db->from('proizvod');
        $this->db->where('IDProizvod', $red[0]);

        $upit = $this->db->get();
        if($upit->num_rows() > 0) {
            $rezultat = $upit->result_array();
            $kolicina = $rezultat[0]['BrojArtikala'];
            return $kolicina;
        }
    }


    // Belezi pojedinacne kupovine
    protected function kupiPojedinacno($red){
        $kolicina = $this->vratiKolicinu($red);
        $this->proizvod['BrojArtikala'] = $kolicina - $red[3];
        
        $this->db->where('IDProizvod', $red[0]);
        $this->db->update('proizvod', $this->proizvod); 
        
        $redTabele = array(
            'IDKupovina' => $this->idKupovine,
            'IDProizvod' => $red[0],
            'Kolicina' => $red[3],  
        );
        $this->db->insert('kupovinapojedinacno', $redTabele); 
    }
    
    // Dohvata id ove kupovine
    protected function vratiID(){
        $this->db->select_max('IDKupovina');       
        $upit = $this->db->get('kupovinaukupno');
        
        if($upit->num_rows() > 0) {
            $rezultat = $upit->result_array();
            $id = $rezultat[0]['IDKupovina'];
        }
        
        return $id;
    }
}

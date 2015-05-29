<?php

class Kupovina extends CI_Model {
    
    private $kupovina;
    private $idKupovine;


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
        
        $this->idKupovine = '';
    }
    
    // Belezi ukupnu kupovinu
    public function kupi($proizvodi){
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
        foreach($niz as $red){
            $this->kupiPojedinacno($red);
        }
    }
    
    // Belezi pojedinacne kupovine
    protected function kupiPojedinacno($red){
        $redTabele = array(
            'IDKupovina' => $this->idKupovine,
            'IDProizvod' => $red->IDProizvod,
            'Kolicina' => $red->Kolicina,  
        );
        $this->db->insert('kupovinapojedinacno', $redTabele); 
    }
    
    // Dohvata id ove kupovine
    protected function vratiID(){
        $id = '';
        
        $this->db->from('kupovinaukupno');
        $this->db->where('DatumKupovine', $this->kupovina['DatumKupovine']);
        $this->db->where('UserName', $this->kupovina['UserName']);
        $this->db->order_by('DatumKupovine', 'desc');
        
        $upit = $this->db->get('kupovinaukupno', 1);
        if($upit->num_rows() > 0) {
            foreach($upit->result() as $red){
                $id = $red->IDKupovina;
            }
        }
        
        return $id;
    }
}

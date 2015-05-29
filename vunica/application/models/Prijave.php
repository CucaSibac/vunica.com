<?php

// Teodora Aleksic, 391/12

class Prijave extends CI_Model {
    
    private $videi;
    private $proizvodi;
    private $komentariVideo;
    private $komentariProizvod;
    private $prijave;
    
    public function __construct() {
        parent::__construct();
        
        $this->videi = NULL;
        $this->proizvodi = NULL;
        $this->komentariVideo = NULL;
        $this->komentariProizvod = NULL; 
        $this->prijave = NULL;
    }
    
    // Ucitava sve priajve iz baze
    public function ucitavanjePrijava(){     
        $this->videi = $this->ucitajPrijavu('prijavavideo');
        $this->proizvodi = $this->ucitajPrijavu('prijavaproizvod');
        $this->komentariVideo = $this->ucitajPrijavu('prijavakomentarvideo');
        $this->komentariProizvod = $this->ucitajPrijavu('prijavakomentarproizvod');
        
        $niz = array(
            0 => $this->videi,
            1 => $this->proizvodi,
            2 => $this->komentariVideo,
            3 => $this->komentariProizvod,
        );
        
        $this->prijave = $this->napraviNiz($niz);
        
        return $this->prijave;
    }
    
    // Ucitava jednu tabelu prijava iz baze
    protected function ucitajPrijavu($baza){
        $this->db->select('*');
        $this->db->from($baza);
        $this->db->order_by('Datum', 'desc');
        $upit = $this->db->get();
        
        if($upit->num_rows() > 0){
            $i = 0;
            foreach ($upit->result() as $red){
                $niz[$i] = $red;
                $i++;
            }
            return $niz;
        }   
        return NULL;
    }
    
    // Spaja elemente 4 tabele u jednu
    protected function napraviNiz($nizovi){  
        $niz = NULL;
        $index = 0;
        $cnt = count($nizovi[0]) + count($nizovi[1]) + count($nizovi[2]) + count($nizovi[3]);
        
        for($i = 0; $i < 4; $i++){
            $ind[$i] = 0;
        }
        
        while($index < $cnt){
            for($i = 0; $i < 4; $i++){
                $elementi[$i] = $this->dohvatiElement($nizovi[$i], $ind[$i]);
            }
            
            $max = $this->nadjiMaximum($elementi);
            
            $elementNiza['Prijava'] = $elementi[$max];
            $ind[$max]++;
            
            $elementNiza['Vrsta'] = $max;
            // 0 - Prijava videa
            // 1 - Prijava proizvoda
            // 2 - Prijava komentara videa
            // 3 - Prijava komentara proizvoda
            
            $vlasnik = $this->ucitajVlasnika($elementNiza['Prijava'], $elementNiza['Vrsta']);
            $elementNiza['Vlasnistvo'] = $vlasnik;
            
            $niz[$index] = $elementNiza;
            $index++;       
        }  
        
        return $niz;
    }
    
    // Dohvata jedan element niza
    protected function dohvatiElement($niz, $index){
        if($niz != NULL){
            if($index < count($niz)){
                return $niz[$index];
            }
        }
        return NULL;
    }
    
    // Nalazi element sa najskorijim datumom
    protected function nadjiMaximum($elementi){
        for($i = 0; $i < 4; $i++){
            if($elementi[$i] != NULL){
                $maxElem = $elementi[$i]->Datum;
                $maxInd = $i;
                break;
            }     
        }
        
        for($j = $i; $j < 4; $j++){
            if($maxElem < $elementi[$j]->Datum){
                $maxElem = $elementi[$j]->Datum;
                $maxInd = $j;
            }     
        }
        
        return $maxInd;
    }
    
    // Ucitava ime vlasnika i sadrzaja na koji se prijava odnosi
    protected function ucitajVlasnika($id, $vrsta){
        switch ($vrsta){
            case 0: 
                return $this->ucitajVideo($id->IDVideo);
            case 1: 
                return $this->ucitajProizvod($id->IDProizvod);
            case 2: 
                return $this->ucitajKomentar($id->IDKomentar, 3);
            case 3: 
                return $this->ucitajKomentar($id->IDKomentar, 4);
        }
    }
    
    // Ucitava ime videa za na kojoj se nalazi neka prijava, naziv i UserName autora
    protected function ucitajVideo($id){
        $vlasnik = array(
            'Vlasnik' => '',
            'Sadrzaj' => '',
            'IDSadrzaj' => '',
        );
        
        $this->db->select('*');
        $this->db->from('video');
        $this->db->where('IDVideo', $id);
        $upit = $this->db->get();
        
        if($upit->num_rows() > 0){
            foreach ($upit->result() as $red){
                $vlasnik['Vlasnik'] = $red->UserName;
                $vlasnik['Sadrzaj'] = $red->Naziv;
                $vlasnik['IDSadrzaj'] = $red->IDVideo;
            }
        }   
        
        return $vlasnik;
    }
    
    // Ucitava ime proizvoda za na kojoj se nalazi neka priajva, naziv i UserName autora
    protected function ucitajProizvod($id){
        $vlasnik = array(
            'Vlasnik' => '',
            'Sadrzaj' => '',
            'IDSadrzaj' => '',
        );
        
        $this->db->select('*');
        $this->db->from('proizvod');
        $this->db->where('IDProizvod', $id);
        $upit = $this->db->get();
        
        if($upit->num_rows() > 0){
            foreach ($upit->result() as $red){
                $vlasnik['Vlasnik'] = $red->UserName;
                $vlasnik['Sadrzaj'] = $red->Naziv;
                $vlasnik['IDSadrzaj'] = $red->IDProizvod;
            }
        }   
        
        return $vlasnik;
    }
    
    // Ucitava ime komentar na koji se odnosi prijava, UserName autora, sadrzaj na koji se odnosi
    protected function ucitajKomentar($id, $vrsta){
        $vlasnik = array(
            'Vlasnik' => '',
            'Komentar' => '',
            'IDKomentara' => '',
            'Sadrzaj' => '',
            'IDSadrzaj' => '',
        );
        
        $this->db->select('*');
        if($vrsta == 3){
            $this->db->from('komentarvideo');        
        }
        else{
            $this->db->from('komentarproizvod');
        }
        $this->db->where('IDKomentar', $id);
        $upit = $this->db->get();
        
        if($upit->num_rows() > 0){
            foreach ($upit->result() as $red){
                $vlasnik['Vlasnik'] = $red->UserName;
                $vlasnik['IDKomentar'] = $red->IDKomentar;
                $vlasnik['Komentar'] = $red->Tekst;
                if($vrsta == 3){
                    $rezultat = $this->ucitajVideo($red->IDVideo);       
                }
                else{
                    $rezultat = $this->ucitajProizvod($red->IDProizvod);
                }
                $vlasnik['Sadrzaj'] = $rezultat['Sadrzaj'];
                $vlasnik['IDSadrzaj'] = $rezultat['IDSadrzaj'];
            }
        }   
        
        return $vlasnik;
    }
    
}

<?php


class KupovinaProizvodaTest extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
    }
    
     private $kupovina;
    private $greske;
    
    public function index() {
        $this->load->library('unit_test');
        $this->test1();
        $this->test2();
        echo $this->unit->report();
    }
      
    public function test1(){
        $this->StaviUCeger();
        $this->unit->run($this->izbaciProizvod(10), true, 'test kupovine');
        
    }
    
    public function test2(){
        $niz[1][1] = "MIS";
        $niz[1][2] = 25;
        $niz[1][3] = 1;
        $this->unit->run($this->tekstPoruke($niz), "MIS - 25€ - 1 komad/a", 'test kupovine');
        
    }
    
    
    protected function tekstPoruke($niz){
        $poruka = '';
        
        foreach ($niz as $red){
            $poruka .= $red[1].' - '.$red[2].'€ - '.$red[3].' komad/a
';
        } 
        
        return $poruka;
    }
    
    function StaviUCeger(){
        $IDProizvod = 10;
        $NazivProizvoda = 'MIS';
        $Cena = 25;
        $KolicinaForma = 1;
        $data = array ($IDProizvod, $NazivProizvoda, $Cena, $KolicinaForma );
        /*    'IDProizvod' => ($this->input->post('IDProizvod')),
            'NazivProizvoda' => ($this->input->post('NazivProizvoda'))
            'Cena' => ($this->input->post('Cena')),
            'KolicinaForma' => ($this->input->post('KolicinaForma'))*/
    
       
        $nizProizvoda = '';
        
        $duzina = count($nizProizvoda);
        if (!$this->session->Proizvodi) {
            $duzina = 0;
        }
        $nizProizvoda[$duzina] = $data;
        $this->session->set_userdata('Proizvodi', $nizProizvoda);
    }
    
    public function izbaciProizvod($id){
        $niz = $this->session->Proizvodi;
        
        $indeks = $this->nadjiIndeks($niz, $id);
        
        unset($niz[$indeks]);     
        $this->session->Proizvodi = array_values($niz);
        
        
       
        return true;
    }
    
    protected function nadjiIndeks($niz, $id){
        $i = 0;
        for(;$i < count($niz);$i++){
            if($niz[$i][0] == $id){
               return $i;
            }
        }
    }
    
    protected function resetujGreske(){
        foreach($this->greske as $element){
            $element = 0;
        }
    }
    
    


}
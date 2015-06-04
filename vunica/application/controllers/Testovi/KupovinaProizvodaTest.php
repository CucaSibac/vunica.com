<?php


class PostavljanjeVideaTest extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $this->load->library('unit_test');
        $this->adresa_Test();
    }
      
    public function test1(){
        $this->StaviUCeger();
        $this->unit->run($this->izbaciProizvod(10), true, 'test kupovine');
        echo $this->unit->report();
    }
    
    protected function adresa($url) {
        $niz = explode('/', $url);
        $duzina = sizeof($niz);
        $novi_url = "";
        for ($i = $duzina - 2; $i < $duzina; $i++) {
            $novi_url .= $niz[$i];
            if ($i != $duzina - 1)
                $novi_url .= '/';
        }
        return 'http://localhost/' . $novi_url;
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
        
        $this->resetujGreske();
        $this->load->view('Ceger', $this->greske);
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


}
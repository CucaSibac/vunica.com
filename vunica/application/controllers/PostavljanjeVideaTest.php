<?php


class PostavljanjeVideaTest extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $this->load->library('unit_test');
        $this->adresa_Test();
    }
    
    // (1) Funkcija koja testira
    public function adresa_Test(){
        $this->unit->run($this->adresa("C:/Users/IcySch/Pictures/Bzvz/auto.jpg"), 'http://localhost/vunica/index.php/Slike/auto.jpg', 'Testiranje putanje slike');
        echo $this->unit->report();
    }
    
    // (1) Funkcija koja se testira
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


}

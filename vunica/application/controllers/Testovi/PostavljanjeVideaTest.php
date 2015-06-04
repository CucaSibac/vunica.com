<?php

// Teodora Aleksic, 391/12

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
        $this->unit->run($this->adresa("D:/home/site/wwwroot/vunica/application/Video/Video.mp4"), 'http://vunica.azurewebsites.net/vunica/application/Video/Video.mp4', 'Testiranje putanje slike');
        echo $this->unit->report();
    }
    
    // (1) Funkcija koja se testira
    function adresa($url) {
        $niz = explode('/', $url);
        $duzina = sizeof($niz);
        $novi_url = "";
        for ($i = $duzina - 1; $i < $duzina; $i++) {
            $novi_url .= $niz[$i];
            if ($i != $duzina - 1){
                $novi_url .= '/';
            }
        }
        return 'http://vunica.azurewebsites.net/vunica/application/Video/' . $novi_url;
    }


}

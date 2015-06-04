<?php


class UklanjanjeVideaTest extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('Obrisi_model');
    }
    
    public function index() {
        $this->load->library('unit_test');
        $this->adresa_Test();
    }
    
    // (1) Funkcija koja testira
    public function test1(){
        $this->unit->run($this->obrisiVideo(''), 'http://vunica.azurewebsites.net/vunica/index.php/application/Video/auto.jpg', 'brisanje videa test');
        echo $this->unit->report();
    }
    
    public function test2(){
        $this->unit->run($this->obrisiVideo(''), 'http://vunica.azurewebsites.net/vunica/index.php/application/Video/auto.jpg', 'brisanje videa test');
        echo $this->unit->report();
    }
    
    public function obrisiVideo($vrednost) {
        $refering_url = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
        if ($refering_url == 'http://vunica.azurewebsites.net/vunica/index.php/Pocetna') {
            
        } else if ($refering_url == 'http://vunica.azurewebsites.net/vunica/index.php/Profil') {
            
        } else {
            $refering_url = 'http://vunica.azurewebsites.net/vunica/index.php/Strikarnica';
        }
        $this->load->model('Obrisi_model');
        $this->Obrisi_model->obrisiVideo($vrednost);
        redirect($refering_url, 'refresh');
    }


}
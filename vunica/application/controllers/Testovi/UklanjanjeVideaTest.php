<?php


class UklanjanjeVideaTest extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('Obrisi_model');
        $this->load->model('Test_model');
    }
    
    public function index() {
        $this->load->library('unit_test');
        $this->test1();
        $this->test2();
    }
    
    public function test1(){
        $this->unit->run($this->obrisiVideo(21), true, 'brisanje videa test1');
        echo $this->unit->report();
    }
    
    public function test2(){
        $this->unit->run($this->obrisiVideo(100), false, 'brisanje videa test2');
        echo $this->unit->report();
    }
    
    public function obrisiVideo($vrednost) {   
        $refering_url = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
        if ($refering_url == 'http://vunica.azurewebsites.net/vunica/index.php/Pocetna') {
            
        } else if ($refering_url == 'http://vunica.azurewebsites.net/vunica/index.php/Profil') {
            
        } else {
            $refering_url = 'http://vunica.azurewebsites.net/vunica/index.php/Strikarnica';
        }
        $rezultat = $this->Test_model->nadji_video($vrednost);
        if($rezultat == false ) return false;
        $this->load->model('Obrisi_model');
        $this->Obrisi_model->obrisiVideo($vrednost);
        return true;
    }


}
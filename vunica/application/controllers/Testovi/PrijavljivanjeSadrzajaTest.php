<?php


class PrijavljivanjeSadrzajaTest extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $this->load->library('unit_test');
        $this->adresa_Test();
    }
        
    public function adresa_Test(){
        $this->unit->run($this->adresa("C:/Users/IcySch/Pictures/Bzvz/auto.jpg"), 'http://vunica.azurewebsites.net/vunica/index.php/application/Video/auto.jpg', 'Testiranje putanje slike');
        echo $this->unit->report();
    }
    
    public function prijaviKomentarProizvod() {
        $refering_url = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
        $this->load->model('PrijavaSadrzaja_model');
        $this->PrijavaSadrzaja_model->prijaviKomentarProizvod();     
        redirect($refering_url, 'refresh');
    }
    
    public function prijaviProizvod() {
        $refering_url = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
        $this->load->model('PrijavaSadrzaja_model');
        $this->PrijavaSadrzaja_model->prijaviProizvod();     
        redirect($refering_url, 'refresh');
    }


}
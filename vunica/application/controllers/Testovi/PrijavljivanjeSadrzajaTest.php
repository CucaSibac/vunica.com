<?php


class PrijavljivanjeSadrzajaTest extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('Test_model');
    }
    
    public function index() {
        $this->load->library('unit_test');
        $this->test1();
        $this->test2();
        echo $this->unit->report();
    }
        
    public function test1(){
        $this->unit->run($this->prijaviVideo(), true, 'prijava videa test');
        
    }
    
    public function test2(){
        $this->unit->run($this->prijaviProizvod(), true, 'prijava proizvoda test');
        
    }
    
    public function prijaviVideo() {
        $this->session->set_flashdata('UserName','Cuca200');
        $this->session->set_flashdata('videoId',9);
        $refering_url = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
        $this->load->model('PrijavaSadrzaja_model');    
        echo $this->session->videoId;
        $this->Test_model->prijaviVideo();     
        return true;
    }
    
    public function prijaviProizvod() {
        $this->session->set_flashdata('UserName','Cuca200');
        $this->session->set_flashdata('proizvodId',5);
        $refering_url = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
        $this->load->model('PrijavaSadrzaja_model');
        $this->Test_model->prijaviProizvod();     
        return true;
    }


}
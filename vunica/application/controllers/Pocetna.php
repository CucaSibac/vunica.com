<?php

class Pocetna extends CI_Controller {
    
    private $podaci;
    
    public function __construct() {
        parent::__construct();
    }
    
    function index(){
        $this->load->view('Pocetna');
    }  
    
}


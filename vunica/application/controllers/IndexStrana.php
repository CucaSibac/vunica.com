<?php

// Teodora Aleksic, 391/12

class IndexStrana extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
    }
    
    function index(){  
        $this->load->view('IndexStrana');
    }   
    
}


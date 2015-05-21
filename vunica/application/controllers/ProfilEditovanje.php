<?php

class ProfilEditovanje extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
    }
    
    function index(){
        $this->load->view('ProfilEditovanje');
    }
    
    function promeni(){ 
        $nesto = $this->input->post('godine');
        echo $nesto;
        echo $this->input->post('godine');
    }  
    
}

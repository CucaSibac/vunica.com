<?php

class PostavljanjeVidea extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('PostavljanjeProizvoda_model');
    }

    public function index() {
        $date = array('video' => '');
        $this->load->view('PostavljanjeVidea',$date);
    }
    
    public function postavljanje_video(){
        echo 'sdasd';
    }

}

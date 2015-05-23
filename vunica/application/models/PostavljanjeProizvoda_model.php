<?php

class PostavljanjeProizvoda_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
    
    public function postavi_sliku($src){
        $this->session->set_userdata('proSlika',$src);
    }
    
}

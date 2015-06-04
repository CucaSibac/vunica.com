<?php

class Test_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
    
    public function nadji_video($id){
        $this->db->from("video");
        $this->db->where("IDVideo", $id);      
        $query = $this->db->get();
        if ($query->num_rows() > 0)
            return true;
        else 
            return false;
        }               
         
}
<?php

class Proizvod extends CI_Controller {
    
    public function index($vredn) {
        $this->load->model('Proizvod_model');
        $nizp['podacip'] = $this->Proizvod_model->getAllForProizvod($vredn);
        $nizp['num_messagesp'] = $this->Proizvod_model->num_messagesp($vredn);
        $nizp['latest_messagesp'] = $this->Proizvod_model->get_messagesp($vredn);
        $this->load->view('Proizvod', $nizp);
    }

    function get_messagesp($vredn, $offset ) {
        $this->load->model('Video_model');
        $nizp['latest_messagesp'] = $this->Proizvod_model->get_messagesp($vredn, $offset);
        $this->load->view('get_messagesp', $nizp);
    }
}


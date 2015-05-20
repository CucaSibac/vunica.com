<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pijaca
 *
 * @author Tijana Trifunovic 311/12
 */
class Pijaca extends CI_Controller {

    public function index() {
        $this->load->model('Pijaca_model');
        $niz['num_proizvod'] = $this->Pijaca_model->num_proizvod();
        $niz['latest_proizvod'] = $this->Pijaca_model->get_proizvod();
        $this->load->view('Pijaca', $niz);
    }

    function get_proizvod($offset) {
        $this->load->model('Pijaca_model');
        $niz['latest_proizvod'] = $this->Pijaca_model->get_proizvod($offset);
        $this->load->view('get_proizvod', $niz);
    }

}
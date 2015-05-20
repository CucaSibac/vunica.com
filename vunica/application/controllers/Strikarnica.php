<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Strikarnica
 *
 * @author Tijana Trifunovic 311/12
 */
class Strikarnica extends CI_Controller {

    public function index() {
        $this->load->model('Strikarnica_model');
        $niz['num_videos'] = $this->Strikarnica_model->num_videos();
        $niz['latest_videos'] = $this->Strikarnica_model->get_videos();
        $this->load->view('Strikarnica', $niz);
    }

    function get_videos($offset) {
        $this->load->model('Strikarnica_model');
        $niz['latest_videos'] = $this->Strikarnica_model->get_videos($offset);
        $this->load->view('get_videos', $niz);
    }

}
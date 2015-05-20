<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Video
 *
 * @author Tijana Trifunovic 311/12
 */
class Video extends CI_Controller {

    public function index($vrednost) {
        $this->load->model('Video_model');
        $niz['podaci'] = $this->Video_model->getAllForVideo($vrednost);
        $niz['num_messages'] = $this->Video_model->num_messages($vrednost);
        $niz['latest_messages'] = $this->Video_model->get_messages($vrednost);
        $this->load->view('Video', $niz);
    }

    function get_messages($vrednost, $offset ) {
        $this->load->model('Video_model');
        $niz['latest_messages'] = $this->Video_model->get_messages($vrednost, $offset);
        $this->load->view('get_messages', $niz);
    }

}

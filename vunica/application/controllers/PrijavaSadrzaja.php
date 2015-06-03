<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PrijavaSadrzaja
 *
 * @author Tijana Trifunovic
 */
class PrijavaSadrzaja extends CI_Controller {

    public function prijaviKomentarVideo() {
        $refering_url = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';      
        $this->load->model('PrijavaSadrzaja_model');
        $this->PrijavaSadrzaja_model->prijaviKomentarVideo();     
        redirect($refering_url, 'refresh');
    }
    
    public function prijaviKomentarProizvod() {
        $refering_url = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
        $this->load->model('PrijavaSadrzaja_model');
        $this->PrijavaSadrzaja_model->prijaviKomentarProizvod();     
        redirect($refering_url, 'refresh');
    }
    
    public function prijaviVideo() {
        $refering_url = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
        $this->load->model('PrijavaSadrzaja_model');    
        echo $this->session->videoId;
        $this->PrijavaSadrzaja_model->prijaviVideo();     
        redirect($refering_url, 'refresh');
    }
    
    public function prijaviProizvod() {
        $refering_url = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
        $this->load->model('PrijavaSadrzaja_model');
        $this->PrijavaSadrzaja_model->prijaviProizvod();     
        redirect($refering_url, 'refresh');
    }

}

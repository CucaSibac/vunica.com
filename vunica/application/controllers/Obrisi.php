<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Obrisi
 *
 * @author Tijana Trifunovic 311/12
 */
class Obrisi extends CI_Controller {

    public function obrisiKomentarVideo($vrednost) {
        $refering_url = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
        $this->load->model('Obrisi_model');
        $this->Obrisi_model->obrisiKomentarVideo($vrednost);
        redirect($refering_url, 'refresh');
    }

    public function obrisiKomentarProizvod($vrednost) {
        $refering_url = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
        $this->load->model('Obrisi_model');
        $this->Obrisi_model->obrisiKomentarProizvod($vrednost);
        redirect($refering_url, 'refresh');
    }

    public function obrisiVideo($vrednost) {
        $refering_url = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
        if ($refering_url == 'http://vunica.azurewebsites.net/vunica/index.php/Pocetna') {
            
        } else if ($refering_url == 'http://vunica.azurewebsites.net/vunica/index.php/Profil') {
            
        } else {
            $refering_url = 'http://vunica.azurewebsites.net/vunica/index.php/Strikarnica';
        }
        $this->load->model('Obrisi_model');
        $this->Obrisi_model->obrisiVideo($vrednost);
        redirect($refering_url, 'refresh');
    }

    public function obrisiProizvod($vrednost) {
        $refering_url = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
        if ($refering_url == 'http://vunica.azurewebsites.net/vunica/index.php/Pocetna') {
            
        } else if ($refering_url == 'http://vunica.azurewebsites.net/vunica/index.php/Profil') {
            
        } else {
            $refering_url = 'http://vunica.azurewebsites.net/vunica/index.php/Pijaca';
        }
        $this->load->model('Obrisi_model');
        $this->Obrisi_model->obrisiProizvod($vrednost);
        redirect($refering_url, 'refresh');
    }

    public function obrisiKorisnika($vrednost) {
        $refering_url = 'http://vunica.azurewebsites.net/vunica/index.php/pocetna';
        $this->load->model('Obrisi_model');
        $this->Obrisi_model->obrisiKorisnika($vrednost);
        redirect($refering_url, 'refresh');
    }

    public function obrisiPrijavaKomentarVideo($vrednost) {
        $refering_url = 'http://vunica.azurewebsites.net/vunica/index.php/pocetna';
        $this->load->model('Obrisi_model');
        $this->Obrisi_model->obrisiPrijavaKomentarVideo($vrednost);
        redirect($refering_url, 'refresh');
    }

    public function obrisiPrijavaKomentarProizvod($vrednost) {
        $refering_url = 'http://vunica.azurewebsites.net/vunica/index.php/pocetna';
        $this->load->model('Obrisi_model');
        $this->Obrisi_model->obrisiPrijavaKomentarProizvod($vrednost);
        redirect($refering_url, 'refresh');
    }

    public function obrisiPrijavaProizvod($vrednost) {
        $refering_url = 'http://vunica.azurewebsites.net/vunica/index.php/pocetna';
        $this->load->model('Obrisi_model');
        $this->Obrisi_model->obrisiPrijavaProizvod($vrednost);
        redirect($refering_url, 'refresh');
    }

    public function obrisiPrijavaVideo($vrednost) {
        $refering_url = 'http://vunica.azurewebsites.net/vunica/index.php/pocetna';
        $this->load->model('Obrisi_model');
        $this->Obrisi_model->obrisiPrijavaVideo($vrednost);
        redirect($refering_url, 'refresh');
    }

}

<?php

// Milos Andric, 206/12

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class PostavljanjeProizvoda extends CI_Controller {

   
    
    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('PostavljanjeProizvoda_model');
    }

    function index() {
        $date = array('slika' => ''); //http://vunica.azurewebsites.net/vunica/application/Slike/Pop-up/Putaca 3.png
        $this->load->view('PostavljanjeProizvoda', $date);
    }

    function adresa($url) {
        $niz = explode('/', $url);
        $duzina = sizeof($niz);
        $novi_url = "";
        for ($i = $duzina - 2; $i < $duzina; $i++) {
            $novi_url .= $niz[$i];
            if ($i != $duzina - 1)
                $novi_url .= '/';
        }
        return 'http://vunica.azurewebsites.net/' . $novi_url;
    }

    public function do_upload() {       
        if($this->input->post('opt') ==1) $this->postavljanje_slike();
        if($this->input->post('opt') ==2) $this->sacuvaj();  
        if($this->input->post('opt') ==3) $this->brisanje();   
    }
    
    public function postavljanje_slike(){
        $this->load->helper('file');
        delete_files($this->session->userdata('proSlika'));
        $this->PostavljanjeProizvoda_model->postavi_sliku('');
        $config['upload_path'] = '../Slike/Proizvodi/';
        $config['allowed_types'] = 'gif|jpg|png';
        //        $config['max_size']             = 100;
        //        $config['max_width']            = 1024;
        //        $config['max_height']           = 768;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload()) {
            
              $error = array('error' => $this->upload->display_errors());
              //$this->load->view('upload_form', $error);
              foreach ($error as $red){
                    echo $red;
                }
                
            $this->session->set_flashdata('proGreska1',1);
            $this->PostavljanjeProizvoda_model->postavi_sliku('');
            $data = array('slika' => '');
        //    $this->load->view('PostavljanjeProizvoda', $data);
        } else {              
            $url = $this->adresa($this->upload->data('full_path'));
            $data = array('slika' => $url);
            $this->PostavljanjeProizvoda_model->postavi_sliku($url);           
            $this->load->view('PostavljanjeProizvoda', $data);
        }
    }
    
     function sacuvaj() {    
        $this->load->library('form_validation');
        $this->form_validation->set_rules('ProNaziv', 'Naziv', 'trim|required'); //|callback_email1_check
        $this->form_validation->set_rules('ProCena', 'Cena', 'trim|required|integer');
        $this->form_validation->set_rules('ProGreska', 'Slika', 'callback_ProGreska_check');
        $this->form_validation->set_message('required', '* Polje je prazno');
        $this->form_validation->set_message('integer', '* Cena nije u odgovarajucem formatu');
        
        if ($this->form_validation->run() == TRUE){
            $this->PostavljanjeProizvoda_model->ubaci_proizvod();
            $refering_url = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
            redirect('http://vunica.azurewebsites.net/vunica/index.php/Pijaca', 'refresh');
        }
        else{
            $url =$this->session->userdata('proSlika');           
            $date = array('slika' => $url); 
            $this->PostavljanjeProizvoda_model->postavi_sliku($url);
            $this->load->view('PostavljanjeProizvoda', $date); 
        }
           
    }
    
   public function ispis_sesije(){
        $niz = $this->session->all_userdata();
        foreach ($niz as $red){
            echo $red;
        }
   }
   
   function ProGreska_check($str){       
        $url =$this->session->userdata('proSlika');             
        if($url == '') {
            $this->session->set_flashdata('proGreska2',1);
            return false;
        }
        else return true;
   }
   
   function brisanje(){
       $this->load->helper('file');
       delete_files($this->session->userdata('proSlika'));
       
       $this->PostavljanjeProizvoda_model->postavi_sliku('');
       $data = array('slika' => '');
       $this->load->view('PostavljanjeProizvoda', $data);
   }

}

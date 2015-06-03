<?php

class ProizvodEditovanje extends CI_Controller {
 
    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('ProizvodEditovanje_model');
    }

    function index($id) {
        $this->ProizvodEditovanje_model->postavi_id($id);
        $proizvod = $this->ProizvodEditovanje_model->dohvati_proizvod($id); 
        $this->load->view('ProizvodEditovanje', $proizvod); 
    }

    public function do_upload() {
        $id = $this->session->IDPro;
        $this->ProizvodEditovanje_model->postavi_id($id);
        if($this->input->post('opt2') ==1) $this->postavljanje_slike();
        if($this->input->post('opt2') ==2) $this->sacuvaj();  
        if($this->input->post('opt2') ==3) $this->brisanje();   
    }
  
    public function postavljanje_slike(){
        
        $config['upload_path'] = '../../Slike/Proizvodi/';
        $config['allowed_types'] = 'gif|jpg|png';
        //        $config['max_size']             = 100;
        //        $config['max_width']            = 1024;
        //        $config['max_height']           = 768;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload()) {
            /*
              $error = array('error' => $this->upload->display_errors());
              $this->load->view('upload_form', $error);                     
            */
            $this->session->set_flashdata('proGreska3',1);
            redirect('http://localhost/vunica.com/vunica/index.php/ProizvodEditovanje/index/'.$this->session->IDPro, 'refresh');
        } else {   
            $stara_slika = $this->ProizvodEditovanje_model->dohvati_sliku($this->session->IDPro);
            $this->load->helper('file');
            delete_files($stara_slika);
            $url = $this->adresa($this->upload->data('full_path'));           
            $this->ProizvodEditovanje_model->ubacivanje_slike($this->session->IDPro,$url);           
            redirect('http://localhost/vunica.com/vunica/index.php/ProizvodEditovanje/index/'.$this->session->IDPro, 'refresh');
        }
    }
    
     function sacuvaj() {    
        $this->load->library('form_validation');
        $this->form_validation->set_rules('ProNaziv', 'Naziv', 'trim|required'); //|callback_email1_check
        $this->form_validation->set_rules('ProCena', 'Cena', 'trim|required|integer');
        $this->form_validation->set_message('required', '* Polje je prazno');
        $this->form_validation->set_message('integer', '* Cena nije u odgovarajucem formatu');
        
        if ($this->form_validation->run() == TRUE){
            $this->ProizvodEditovanje_model->izmeni_proizvod($this->session->IDPro);
            redirect('http://localhost/vunica.com/vunica/index.php/Proizvod/index/'.$this->session->IDPro, 'refresh');
        }
        else{
            $id = $this->session->IDPro;
            $this->ProizvodEditovanje_model->postavi_id($id);
            $proizvod = $this->ProizvodEditovanje_model->dohvati_proizvod($id);
            $this->load->view('ProizvodEditovanje', $proizvod);
            //redirect('http://localhost/vunica.com/vunica/index.php/ProizvodEditovanje/index/'.$this->session->IDPro, 'refresh');
        }
           
    }  
   
   function brisanje(){
        $id = $this->session->IDPro;
        $this->ProizvodEditovanje_model->brisanje_slike($id);
        redirect('http://localhost/vunica.com/vunica/index.php/ProizvodEditovanje/index/'.$this->session->IDPro, 'refresh');
         
   }

   function adresa($url) {
        $niz = explode('/', $url);
        $duzina = sizeof($niz);
        $novi_url = "";
        for ($i = $duzina - 3; $i < $duzina; $i++) {
            $novi_url .= $niz[$i];
            if ($i != $duzina - 1)
                $novi_url .= '/';
        }
        return 'http://localhost/' . $novi_url;
    }
 
}


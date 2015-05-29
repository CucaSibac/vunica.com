<?php

class ProizvodEditovanje extends CI_Controller {
 
    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('ProizvodEditovanje_model');
    }

    function index($id) {
        $proizvod = $this->ProizvodEditovanje_model->dohvati_proizvod($id);
        $this->load->view('ProizvodEditovanje', $proizvod); 
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

    public function do_upload() {  
        
        if($this->input->post('opt2') ==1) $this->postavljanje_slike();
        if($this->input->post('opt2') ==2) $this->sacuvaj();  
        if($this->input->post('opt2') ==3) $this->brisanje();   
    }
    
    public function postavljanje_slike(){
        $this->ProizvodEditovanje_model->postavi_sliku('');
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
            $this->ProizvodEditovanje_model->postavi_sliku('');
            $proizvod = $this->ProizvodEditovanje_model->dohvati_proizvod($id);
            $this->load->view('ProizvodEditovanje', $proizvod); 
        } else {               
            $url = $this->adresa($this->upload->data('full_path'));
            $data = array('slika' => $url);
            $this->ProizvodEditovanje_model->postavi_sliku($url);           
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
            $this->ProizvodEditovanje_model->ubaci_proizvod();
            $refering_url = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
            redirect('http://localhost/vunica.com/vunica/index.php/Proizvod/index/'.$this->session->IProizvod, 'refresh');
        }
        else{
            $url =$this->session->userdata('proSlika');           
            $date = array('slika' => $url); 
            $this->ProizvodEditovanje_model->postavi_sliku($url);
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
        $this->form_validation->set_message('ProGreska_check', 'Niste postavili sliku!');
        if($url == '') return false;
        else return true;
   }
   
   function brisanje(){
       $this->ProizvodEditovanje_model->postavi_sliku('');
       $data = array('slika' => '');
       $this->load->view('PostavljanjeProizvoda', $data);
   }

}


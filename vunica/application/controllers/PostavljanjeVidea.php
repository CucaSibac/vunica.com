<?php

// Milos Andric, 206/12

class PostavljanjeVidea extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('PostavljanjeVidea_model');
    }

    public function index() {
        $date = array('video' => '');
        $this->load->view('PostavljanjeVidea',$date);
    }
    
    public function postavljanje_video(){
        if($this->input->post('opt1') == 1)$this->ucitaj_video();
        if($this->input->post('opt1') == 2) $this->sacuvaj();
        if($this->input->post('opt1') == 3) $this->brisi();
         
    }
    
    public function ucitaj_video(){
        $this->PostavljanjeVidea_model->postavi_video('');
        $config['upload_path'] = '../../Video/';
        $config['allowed_types'] = 'avi|mkv|mp4';
        $config['max_size'] = 102400;       
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload()) {
            /*
            $error = array('error' => $this->upload->display_errors());           
            foreach ($error as $red){
                echo $red;
            }
             */
            $this->session->set_flashdata('videoGreska1',1);
            $this->PostavljanjeVidea_model->postavi_video('');
            $date = array('video' => '');
            $this->load->view('PostavljanjeVidea',$date);
        }
        else{           
            $url = $this->adresa($this->upload->data('full_path'));
            $data = array('video' => $url);          
            $this->PostavljanjeVidea_model->postavi_video($url);           
            $this->load->view('PostavljanjeVidea', $data);
        }      
             
    }
    
    public function sacuvaj(){
        
        $this->load->library('form_validation');
        $this->form_validation->set_rules('vidNaziv', 'Naziv', 'trim|required'); //|callback_email1_check
        $this->form_validation->set_rules('VidGreska', 'Slika', 'callback_VidGreska_check');
        $this->form_validation->set_message('required', '* Polje je prazno');
        
        if ($this->form_validation->run() == TRUE){
            $this->PostavljanjeVidea_model->ubaci_video();
            $refering_url = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
            redirect('http://localhost/vunica.com/vunica/index.php/Strikarnica', 'refresh');
        }
        else{
            $url =$this->session->userdata('proVideo');           
            $data = array('video' => $url); 
            $this->PostavljanjeVidea_model->postavi_video($url);           
            $this->load->view('PostavljanjeVidea', $data);
        } 
        
        
        
        
        /*
        $this->PostavljanjeVidea_model->ubaci_video();
        $this->load->view('Strikarnica');        
         */ 
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
        return 'http://localhost/' . $novi_url;
    }
    
    function VidGreska_check($str){
        $url =$this->session->userdata('proVideo');       
        if($url == ''){
            $this->session->set_flashdata('videoGreska2',1);
            return false;
        }
        else return true;
   }
   
   function brisi(){
       $this->PostavljanjeVidea_model->postavi_video('');
       $data = array('video' => '');
       $this->load->view('PostavljanjeVidea', $data);
   }

}

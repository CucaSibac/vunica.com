<?php

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
        if($this->input->post('opt1') == 2) $this->sacuvaj();
        else $this->ucitaj_video();
         
    }
    
    public function ucitaj_video(){
        $this->PostavljanjeVidea_model->postavi_video('');
        $config['upload_path'] = '../../Video/';
        $config['allowed_types'] = 'avi|mkv|mp4|gif|jpg|png';
        $config['max_size'] = 100000000;       
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload()) {
            $error = array('error' => $this->upload->display_errors());           
            foreach ($error as $red){
                echo $red;
            }
        }
        else{           
            $url = $this->adresa($this->upload->data('full_path'));
            $data = array('video' => $url);          
            echo $url;
            $this->PostavljanjeVidea_model->postavi_video($url);           
            $this->load->view('PostavljanjeVidea', $data);
        }      
             
    }
    
    public function sacuvaj(){
        echo $this->PostavljanjeVidea_model->ubaci_video();
        $this->load->view('Strikarnica');    
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

}

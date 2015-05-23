<?php

class PostavljanjeVidea extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('PostavljanjeProizvoda_model');
    }

    public function index() {
        $date = array('video' => '');
        $this->load->view('PostavljanjeVidea',$date);
    }
    
    public function postavljanje_video(){
        echo $this->input->post('opt1');
        if($this->input->post('opt1') == 2) $this->sacuvaj();
        else $this->ucitaj_video();
         
    }
    
    public function ucitaj_video(){
        /*
        $config['upload_path'] = '../../Slike/Video/';
        $config['allowed_types'] = 'avi|mkv|mp4';
        //        $config['max_size']             = 100;
        //        $config['max_width']            = 1024;
        //        $config['max_height']           = 768;
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
            //$this->PostavljanjeProizvoda_model->postavi_sliku($url);           
            //$this->load->view('PostavljanjeVidea', $data);
        }
        */
        
        
        //$this->PostavljanjeProizvoda_model->postavi_sliku('');
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
            $data = array('slika' => '');
            echo "greska";
            //$this->load->view('PostavljanjeProizvoda', $data);
        } else {              
            //$url = $this->adresa($this->upload->data('full_path'));
            //$data = array('slika' => $url);
            echo "ok";
            //$this->PostavljanjeProizvoda_model->postavi_sliku($url);           
            //$this->load->view('PostavljanjeProizvoda', $data);
        }
         
    }
    
    public function sacuvaj(){
        echo $this->input->post('opt1');
        echo "video sacuvan";
    }

}

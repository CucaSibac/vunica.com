<?php

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
        $date = array('slika' => ''); //http://localhost/Slike/Pop-up/Putaca 3.png
        $this->load->view('PostavljanjeProizvoda', $date);
    }

    /*
      public function do_upload()
      {
      $config['upload_path']          = '../uploads/';
      $config['allowed_types']        = 'gif|jpg|png';
      //        $config['max_size']             = 100;
      //        $config['max_width']            = 1024;
      //        $config['max_height']           = 768;

      $this->load->library('upload', $config);

      if (!$this->upload->do_upload())
      {


      $error = array('error' => $this->upload->display_errors());

      $this->load->view('upload_form', $error);
      }
      else
      {
      $data = array('upload_data' => $this->upload->data());
      echo $this->upload->data('full_path');
      echo $this->input->post('ProNaziv');
      echo $this->input->post('ProCena');
      echo $this->input->post('ProKat');
      echo $this->input->post('ProKol');

      $this->load->library('ftp');

      $config['hostname'] = 'http://localhost/';
      // $config['username'] = 'your-username';
      //  $config['password'] = 'your-password';
      //  $config['port']     = 21;
      //  $config['passive']  = FALSE;
      $config['debug']    = TRUE;

      $this->ftp->connect($config);
      $this->ftp->move('/public_html/joe/blog.html', '/public_html/fred/blog.html');

      //echo '<img src="C:/wamp/www/vunica.com/uploads/18.JPG1" />';
      //$this->load->view('upload_success', $data);
      }
      }
     */

    public function x() {
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
        } else {
            /* $data = array('upload_data' => $this->upload->data());
              echo $this->upload->data('full_path');
              echo $this->input->post('ProNaziv');
              echo $this->input->post('ProCena');
              echo $this->input->post('ProKat');
              echo $this->input->post('ProKol'); */
            // echo $this->upload->data('full_path');                     
            $url = $this->adresa($this->upload->data('full_path'));
            //echo $url;
            $data = array('slika' => $url);
            
            
            //$this->load->view('PostavljanjeProizvoda', $data);
        }
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
        
        if($this->input->post('opt') ==1) $this->postavljanje_slike();
        else $this->sacuvaj();                                 
    }
    
    public function postavljanje_slike(){
        $this->PostavljanjeProizvoda_model->postavi_sliku('');
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
            $this->load->view('PostavljanjeProizvoda', $data);
        } else {              
            $url = $this->adresa($this->upload->data('full_path'));
            $data = array('slika' => $url);
            $this->PostavljanjeProizvoda_model->postavi_sliku($url);           
            $this->load->view('PostavljanjeProizvoda', $data);
        }
    }
    
     function sacuvaj() {    
        $url =$this->session->userdata('proSlika');
        echo $url;
        $date = array('slika' => $url); 
        echo $this->input->post('ProOpis') ;
        echo $this->input->post('ProKol') ;
        $this->PostavljanjeProizvoda_model->ubaci_proizvod();
        //$this->load->view('PostavljanjeProizvoda', $date);
    }
    
   public function ispis_sesije(){
        $niz = $this->session->all_userdata();
        foreach ($niz as $red){
            echo $red;
        }
   }

}

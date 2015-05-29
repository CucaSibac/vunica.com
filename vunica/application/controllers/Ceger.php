<?php

class Ceger extends CI_Controller{
    
    public $niz;
    private $podaci;
    private $greske;
    
    public function __construct() {
        parent::__construct();
        $this->podaci = array(
            'BrojKartice' => '',
            'DatumIsteka' => '',
            'Sigurnosni' => '',
            'Grad' => '',
            'Postanski' => '',
            'Ulica' => ''
        );
        
        $this->greske = array(
            'Grad' => 0,
            'Postanski' => 0,
            'Kartica' => 0
        ); 
    }
    
    public function provera(){
        $this->niz = $this->session->Proizvodi;
        
        if($this->session->UserName != '' && $this->niz != ''){
            $this->load->view('Ceger', $this->greske);
            $this->podaci['BrojKartice'] = $this->input->post('karticabr');
            $this->podaci['DatumIsteka'] = $this->input->post('datumisteka');
            $this->podaci['Sigurnosni'] = $this->input->post('sigurnosni');
            $this->podaci['Grad'] = $this->input->post('grad');
            $this->podaci['Postanski'] = $this->input->post('postanski');
            $this->podaci['Ulica'] = $this->input->post('ulica');
        }
        else if($this->session->UserName != '' && $this->niz == ''){
            $this->load->view('PrazanCeger');
        }
        else{
            $this->load->view('GreskaStrana');
        }
    }
    
    protected function resetuj(){
        foreach($this->greske as $element){
            $element = 0;
        }
    }
  
    function index(){
        $this->resetuj();
        $this->load->model('PopUp_model');
        if($this->session->UserName != ''){
            $this->load->view('Ceger', $this->greske);
        }
        else{
            //$this->load->view('GreskaStrana');
            $this->load->view('GreskaStrana');
        }   
    }
    
    protected function proveraKartica(){
        if($this->input->post('karticabr') != ''){
            $this->form_validation->set_rules('karticabr', 'Karticabr', 'trim|numeric|is_natural|greater_than[0]|less_than[151]');
            if($this->form_validation->run() == TRUE){
                return $this->input->post('karticabr');
            }
            $this->greske['Kartica'] = 1;
        }
        
        return NULL;
    }
    
}


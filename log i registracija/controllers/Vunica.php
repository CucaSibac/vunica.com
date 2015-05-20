 <?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 
 class Vunica extends CI_Controller {
	
	 public function __construct()
 {
  parent::__construct();
  $this->load->model('vunica_model');
 }
 
    function index() {
        $niz['tekst'] = "danas je cetvrtak";
        $niz['drugitekst'] = "sutra je petak";
        $this->load->view('Index', $niz);
    }
    
    function pocetna(){
        $this->load->view('Pocetna');
    }
    
    function strikarnica() {
		if(($this->session->userdata('UserName')!="")){
			$set_data = $this->session->all_userdata();
			$this->load->view('Strikarnica',$set_data);
		}
		else $this->load->view('Strikarnica');
    }
    
    function video() {
        $this->load->model('Vunica_model');
        $niz['podaci'] = $this->Vunica_model->getAllForVideo();
        /*$niz['komentari'] = $this->Vunica_model->getAllForComments();*/
        $this->load->view('Video', $niz);
    }
    
    function proizvod() {
        $this->load->view('Proizvod');
    }
	
	function pijaca() {
        $this->load->view('Pijaca');
    }
	
	function PostavljanjeProizvoda() {
        $this->load->view('PostavljanjeProizvoda');
    }
	
	public function registration()
	 {
	  $this->load->library('form_validation');
	  // field name, error message, validation rules
	  $this->form_validation->set_rules('UserName', 'UserName', 'trim|required|min_length[4]');
	  $this->form_validation->set_rules('Ime', 'Ime', 'trim|required|min_length[4]');
	  $this->form_validation->set_rules('Email', 'Email', 'trim|required|valid_email');
	  $this->form_validation->set_rules('EmailPotvrda', 'EmailPotvrda', 'trim|required|matches[Email]'	);
	  $this->form_validation->set_rules('Sifra', 'Sifra', 'trim|required|min_length[4]|max_length[32]');
	  $this->form_validation->set_rules('con_password', 'Password Confirmation', 'trim|required|matches[Sifra]'	);
		
	  if($this->form_validation->run() == FALSE)
	  {
	   $this->strikarnica();
	  }
	  else
	  {
	   $this->vunica_model->add_user();	
	  }
	 }
	 
	 public function login()
	 {
	  $email=$this->input->post('email1');
	  $password=($this->input->post('password1'));
	  $result=$this->vunica_model->login($email,$password);
	  if($result) $this->strikarnica();
	  //else        $this->strikarnica();
	 }
	
 }

<?php

// Teodora Aleksic, 391/12

class ProfilEditovanje extends CI_Controller {
    
    private $promene;
    private $greske;
    
    public function __construct() {
        parent::__construct();
        $this->load->model('UpdateKorisnik');
        
        $this->promene = array(
            'ImePrezime' => '',
            'Godine' => '',
            'Pol' => '',
            'Slika' => '',
            'Lokacija' => '',
            'Email' => '',
            'Lozinka' => '',
            'Opis' => '',
        );
        
        $this->greske = array(
            'Godine' => 0,
            'Slika' => 0,
            'Email' => 0,
            'Lozinka' => 0,
        ); 
    }
        
    protected function resetujGreske(){
        foreach($this->greske as $element){
            $element = 0;
        }
    }


    public function index(){
        $this->resetujGreske();
        $this->load->view('ProfilEditovanje', $this->greske);
    }
    
    public function promeni(){ 
        $this->resetujGreske();
        
        // Provera vrednosti
        $this->load->library('form_validation');
        
        $this->promene['Godine'] = $this->proveraGodine();
        // $this->promene['Slika'] = $this->proveraSlika();
        $this->promene['Email'] = $this->proveraEmail();
        $this->promene['Lozinka'] = $this->proveraLozinka();
        
        $this->promene['Pol'] = $this->input->post('pol');
        $this->promene['Lokacija'] = $this->input->post('lokacija');
        $this->promene['ImePrezime'] = $this->input->post('imeprezime');
        $this->promene['Opis'] = $this->input->post('opis');
        
        // Upis u bazu
        if($this->UpdateKorisnik->nadjiEmail($this->promene['Email'])){
            $this->UpdateKorisnik->promeniKorisnika($this->promene);
        }
        else{
            $this->greske['Email'] = 2;
        }
        
        $this->load->view('ProfilEditovanje', $this->greske);
    }  
    
    protected function proveraGodine(){
        if($this->input->post('godine') != ''){
            $this->form_validation->set_rules('godine', 'Godine', 'trim|numeric|is_natural|greater_than[0]|less_than[151]');
            if($this->form_validation->run() == TRUE){
                return $this->input->post('godine');
            }
            $this->greske['Godine'] = 1;
        }
        
        return NULL;
    }
    
    protected function proveraSlika(){
        
    }
    
    protected function proveraEmail(){
        if($this->input->post('email') != '' && $this->input->post('emailPotvrda') != ''){
            $this->form_validation->set_rules('email', 'E-mail', 'trim|valid_email|max_length[40]');
            $this->form_validation->set_rules('emailPotvrda', 'E-mail potvrda', 'trim|matches[email]');
            if($this->form_validation->run() == TRUE){
                return $this->input->post('email');
                // proveriti kasnije da li ovaj email vec postoji u bazi
            }
            $this->greske['Email'] = 1;
        }
        if($this->input->post('email') != '' || $this->input->post('emailPotvrda') != ''){
            $this->greske['Email'] = 1;
        }
        
        return NULL;
    }
    
    protected function proveraLozinka(){
        if($this->input->post('lozinka') != '' && $this->input->post('lozinkaPotvrda') != ''){
            $this->form_validation->set_rules('lozinka', 'Lozinka', 'trim|min_length[4]|max_length[40]');
            $this->form_validation->set_rules('lozinkaPotvrda', 'Lozinka povtrda', 'trim|matches[lozinka]');
            if($this->form_validation->run() == TRUE){
                return $this->input->post('lozinka');
            }
            $this->greske['Lozinka'] = 1;
        }
        if($this->input->post('lozinka') != '' || $this->input->post('lozinkaPotvrda') != ''){
            $this->greske['Lozinka'] = 1;
        }
        
        return NULL;
    }
    
}

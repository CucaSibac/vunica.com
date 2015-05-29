<?php

// Teodora Aleksic, 391/12

class ProfilEditovanje extends CI_Controller {
    
    private $promene;
    private $greske;

    // Inicijalizacija svih nizova
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
            'Profilna' => $this->session->Slika,
        ); 
    }

    // Prelazi na profil editovanje ako je korisnik ulogovan
    public function index(){
        $this->resetujGreske();
        
        if($this->session->UserName != ''){
            $this->load->view('ProfilEditovanje', $this->greske);
        }
        else{
            $this->load->view('GreskaStrana');
        }
    }
    
    // Resetuje sve greske na nulu
    protected function resetujGreske(){
        $this->greske['Godine'] = 0;
        $this->greske['Slika'] = 0;
        $this->greske['Email'] = 0;
        $this->greske['Lozinka'] = 0;
    }
    
    // Izvrsava funckiju u zavisnosti koje je dugme selektovano
    public function opcija(){
        if($this->input->post('opt') == 1){
            $this->postaviSliku();
        }
        else{
            if($this->input->post('opt') == 2){ 
                $this->promeni();
            }
            else{
                $this->obrisiSiiku();
            }
        }
    }
    
    // Pravi adresu
    protected function adresa($url) {
        $niz = explode('/', $url);
        $duzina = sizeof($niz);
        $novi_url = "";
        for ($i = $duzina - 3; $i < $duzina; $i++) {
            $novi_url .= $niz[$i];
            if ($i != $duzina - 1){
                $novi_url .= '/';
            }
        }
        return 'http://localhost/' . $novi_url;
    }

    // Uploaduje sliku
    protected function postaviSliku(){    
        $config['upload_path'] = '../../Slike/Profilna/';
        $config['allowed_types'] = 'gif|jpg|png';  
        $this->load->library('upload', $config);
        
        if (!$this->upload->do_upload()) {
            // $this->greske['Profilna'] = '';
            $this->greske['Slika'] = 1;
            $this->load->view('ProfilEditovanje', $this->greske);
        }
        else {
            $url = $this->adresa($this->upload->data('full_path'));
            $this->greske['Profilna'] = $url;
            $this->promene['Slika'] = $url;           
            $this->load->view('ProfilEditovanje', $this->greske);
        }
    }
    
    // Brise sliku, stavlja default u zavinsosti od pola
    protected function obrisiSiiku(){
        $pol = $this->input->post('pol');
        if(strcmp($pol, "Musko") == 0){
            $this->promene['Slika'] = "http://localhost/Slike/Profilna/Musko.jpg";
        } 
        else{
            if(strcmp($pol, "Zensko") == 0){
                $this->promene['Slika'] = "http://localhost/Slike/Profilna/Zensko.jpg";
            } 
            else{
                $this->promene['Slika'] = "http://localhost/Slike/Profilna/Nedefinisano.jpg";
            }
        }  
        $this->greske['Profilna'] = $this->promene['Slika'];
        $this->load->view('ProfilEditovanje', $this->greske);
    }
    

    // Menja podatke u bazi
    protected function promeni(){ 
        $this->resetujGreske();
        
        // Provera vrednosti
        $this->load->library('form_validation');
        
        $this->promene['Godine'] = $this->proveraGodine();
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
        
        if($this->session->UserName != ''){
            $this->load->view('ProfilEditovanje', $this->greske);
        }
        else{
            $this->load->view('GreskaStrana');
        }
    }  
    
    // Proverava godine
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
    
    // Proverava email
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
    
    // Proverava lozinku
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

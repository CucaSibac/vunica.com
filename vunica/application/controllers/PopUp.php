<?php

class PopUp extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('PopUp_model');
        $this->load->model('Strikarnica_model');
    }

    public function registration() {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('UserName', 'Korisnicko ime', 'trim|required|min_length[4]|is_unique[korisnik.UserName]');
        $this->form_validation->set_rules('ImePrezime', 'Ime i prezime', 'trim|required|min_length[4]');
        $this->form_validation->set_rules('Email', 'Email', 'trim|required|valid_email|is_unique[korisnik.Email]');
        $this->form_validation->set_rules('EmailPotvrda', 'Potvrda', 'trim|required|matches[Email]');
        $this->form_validation->set_rules('Sifra', 'Sifra', 'trim|required|min_length[4]');
        $this->form_validation->set_rules('con_password', 'Potvrda', 'trim|required|matches[Sifra]');

        $this->form_validation->set_message('required', '* Polje je prazno');
        $this->form_validation->set_message('min_length', '* Polje je kratko');
        $this->form_validation->set_message('is_unique', '* Polje nije jedinstveno');
        $this->form_validation->set_message('valid_email', '* E-mail nije u odgovarajucem formatu');
        $this->form_validation->set_message('matches', '* Polje se ne poklapa');

        if ($this->form_validation->run() == TRUE) {
            $this->PopUp_model->dodaj_korisnika();
            $greske = array(
                'Godine' => 0,
                'Slika' => 0,
                'Email' => 0,
                'Lozinka' => 0,
            );
            $this->load->view('ProfilEditovanje', $greske);
        } else {
            $this->session->set_flashdata('reg', 1);
            
            $url = $this->prethodna_strana();
            
            if($url == "login") $url = $this->session->userdata('log_prva');
            if ($url == "zl") $url = $this->session->userdata('zl_prva');
            if ($url == "registration")
                $url = $this->session->userdata('prva');
            else
                $this->PopUp_model->postavi_prvu_stranu($url);
            //echo $this->session->userdata('prva');
                       
            if ($url == 'Strikarnica' || $url == 'strikarnica'){                               
                $niz['num_videos'] = $this->Strikarnica_model->num_videos();
                $niz['latest_videos'] = $this->Strikarnica_model->get_videos();
                $this->load->view('Strikarnica', $niz);
                
               // echo "<script language=\"javascript\">prikazi_registraciju();</script>";
            }
            
            if ($url == 'Proizvod'){
                $this->load->model('Proizvod_model');
                $nizp['podacip'] = $this->Proizvod_model->getAllForProizvod($vredn);
                $nizp['ucegeru'] = $this->Proizvod_model->dohvatiKolicinu($vredn);
                $nizp['num_messagesp'] = $this->Proizvod_model->num_messagesp($vredn);
                $nizp['latest_messagesp'] = $this->Proizvod_model->get_messagesp($vredn);
                $this->load->view('Proizvod', $nizp);
            }      
            if ($url == 'PostavljanjeVidea') {
                $date = array('video' => '');
                $this->load->view($url, $date);
            }
            if ($url == 'PostavljanjeProizvoda') {
                $date = array('slika' => '');
                $this->load->view($url, $date);
            }
            if ($url == 'IndexStrana') {
                 $this->load->view('IndexStrana');
            }
            if ($url == 'IndexStrana') {
                 $this->load->view('IndexStrana');
            }
            
            //$this->load->view($url);
        }
    }

    public function login() {
        $url = $this->prethodna_strana();
        if ($url == "zl") $url = $this->session->userdata('zl_prva');
        if ($url == "registration")
                $url = $this->session->userdata('prva');
        if ($url == "login") $url = $this->session->userdata('log_prva');
        else $this->PopUp_model->postavi_prvu_log_stranu($url);
        
       
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email1', 'Email', 'trim|required|valid_email|callback_email1_check');
        $this->form_validation->set_rules('password1', 'Sifra', 'trim|required');
        $this->form_validation->set_message('required', '* Polje je prazno');
        $this->form_validation->set_message('valid_email', '* E-mail nije u odgovarajucem formatu');
        if ($this->form_validation->run() == TRUE) {
            if ($url == 'Strikarnica' || $url == 'strikarnica'){               
                $niz['num_videos'] = $this->Strikarnica_model->num_videos();
                $niz['latest_videos'] = $this->Strikarnica_model->get_videos();
                $this->load->view('Strikarnica', $niz);
            }           
        }
        else {
            $this->session->set_flashdata('pri', 1);
            
            if ($url == 'Strikarnica' || $url == 'strikarnica'){               
                $niz['num_videos'] = $this->Strikarnica_model->num_videos();
                $niz['latest_videos'] = $this->Strikarnica_model->get_videos();
                $this->load->view('Strikarnica', $niz);
            } 
            
            if ($url == 'PostavljanjeProizvoda') {
                $date = array('slika' => '');
                $this->load->view($url, $date);
            }
            
        }
        
    }

    public function logout() {       
        $refering_url = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
        $this->PopUp_model->logout();
        redirect('http://localhost/vunica.com/vunica/index.php/Pocetna', 'refresh');
;               
    }

    public function zl() {
        $url = $this->prethodna_strana();
        
        if ($url == "registration")
                $url = $this->session->userdata('prva');
        if ($url == "login") $url = $this->session->userdata('log_prva');
        if ($url == "zl") $url = $this->session->userdata('zl_prva');
        else $this->PopUp_model->postavi_prvu_zl_stranu($url);
 
        $this->load->library('form_validation');
        $this->form_validation->set_rules('zlEmail', 'Email', 'trim|required|valid_email|callback_zlEmail_check');
        if ($this->form_validation->run() == TRUE){
             if ($url == 'Strikarnica' || $url == 'strikarnica'){               
                $niz['num_videos'] = $this->Strikarnica_model->num_videos();
                $niz['latest_videos'] = $this->Strikarnica_model->get_videos();
                $this->load->view('Strikarnica', $niz);
            } 
        }
        else {
            $this->session->set_flashdata('zl', 1);
            
             if ($url == 'Strikarnica' || $url == 'strikarnica'){               
                $niz['num_videos'] = $this->Strikarnica_model->num_videos();
                $niz['latest_videos'] = $this->Strikarnica_model->get_videos();
                $this->load->view('Strikarnica', $niz);
            } 
            
            if ($url == 'PostavljanjeProizvoda') {
                $date = array('slika' => '');
                $this->load->view($url, $date);
            }
        }
        
        /*
        $podaci = $this->PopUp_model->zl($this->input->post('zlEmail'));
        if ($podaci != '') {
            $this->load->library('email');

            $config['protocol'] = 'smtp';
            $config['smtp_host'] = 'ssl://smtp.gmail.com';   //examples: ssl://smtp.googlemail.com, myhost.com
            $config['smtp_user'] = 'andricgmilos@gmail.com';
            $config['smtp_pass'] = '****'; //HAHAHA
            $config['smtp_port'] = '465';
            $this->email->initialize($config);

            $this->email->from('andricgmilos@gmail.com', 'Your Name');
            $this->email->to('milosgandric@gmail.com');
            $this->email->subject('Email Test');
            $this->email->message('Testing the email class.');
   //         $this->email->send();
            echo "poslato";
        } else {
            
        }
         
         */
        
    }

    public function prethodna_strana() {
        $refering_url = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
        $niz = explode('/', $refering_url);
        $duzina = sizeof($niz);
        $novi_url = $niz[$duzina - 1];
        return $novi_url;
    }

    public function email1_check($str) {
        $email = $this->input->post('email1');
        $password = ($this->input->post('password1'));
        $result = $this->PopUp_model->login($email, $password);
        $this->form_validation->set_message('email1_check', 'nesto nije ok!');
        return $result;
    }
    
    public function zlEmail_check($str) {
        $podaci = $this->PopUp_model->zl($this->input->post('zlEmail'));
        $this->form_validation->set_message('zlEmail_check', 'E-mail adresa ne postoji u bazi podataka');
        if ($podaci == '') return false;
       
        $this->load->library('email');
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.gmail.com';   //examples: ssl://smtp.googlemail.com, myhost.com
        $config['smtp_user'] = 'andricgmilos@gmail.com';
        $config['smtp_pass'] = '****'; //HAHAHA
        $config['smtp_port'] = '465';
        $this->email->initialize($config);
        
        $this->email->from('andricgmilos@gmail.com', 'Tim vunica.com');
        $this->email->to('milosgandric@gmail.com');//$this->input->post('zlEmail')
        $this->email->subject('Povratak lozinke');
        $this->email->message('Testing the email class.');//$podaci      
   //   $this->email->send();
        return true;
       
    }
    
}

<?php

// Teodora Aleksic, 391/12

class PopUpRegistracijaTest extends CI_Controller  {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('PopUp_model');
        $this->load->model('Strikarnica_model');
        $this->load->model('Pijaca_model');
        $this->load->model('Video_model');
        $this->load->model('Proizvod_model');
        $this->load->model('Prijave');
        $this->load->model('Korisnici');
        $this->load->model('NoviVidei');
        $this->load->model('NoviProizvodi');
    }
    
    public function index() {
        $this->load->library('unit_test');
        $this->registration_Test();
    }
    
    // (1) Funkcija koja testira
    public function registration_Test(){
        $this->unit->run($this->registration(), TRUE, 'Testiranje ucitavanja jednog dela proizvoda');
        echo $this->unit->report();
    }
    
    // (1) Funkcija koja se testira
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

            $podaci = $this->prethodna_strana();
            $url = $podaci['url'];

            if ($url == "login")
                $url = $this->session->userdata('log_prva');
            if ($url == "zl")
                $url = $this->session->userdata('zl_prva');
            if ($url == "registration")
                $url = $this->session->userdata('prva');
            else
                $this->PopUp_model->postavi_prvu_stranu($url);

            if ($url == 'Strikarnica' || $url == 'strikarnica') {
                $niz['num_videos'] = $this->Strikarnica_model->num_videos();
                $niz['latest_videos'] = $this->Strikarnica_model->get_videos();
                //$this->load->view('Strikarnica', $niz);
                return TRUE;
            }

            if ($url == 'Pijaca' || $url == 'pijaca') {
                $niz['num_proizvod'] = $this->Pijaca_model->num_proizvod();
                $niz['latest_proizvod'] = $this->Pijaca_model->get_proizvod();
                //$this->load->view('Pijaca', $niz);
                return TRUE;
            }

            if ($url == 'video' || $url == 'komentar' || $url == 'obrisiKomentarVideo' || $url == 'prijaviKomentarVideo' || $url == 'prijaviVideo') {
                $niz['podaci'] = $this->Video_model->getAllForVideo($this->session->broj);
                $niz['num_messages'] = $this->Video_model->num_messages($this->session->broj);
                $niz['latest_messages'] = $this->Video_model->get_messages($this->session->broj);
                if($url != 'video' ) $this->session->set_flashdata('reg', 0);
                //$this->load->view('Video', $niz); 
                return TRUE;
            }

            if ($url == 'proizvod' || $url == 'komentarp' || $url=='obrisiKomentarProizvod' ||$url == 'prijaviKomentarProizvod' || $url == 'prijaviProizvod') {
          
                $nizp['podacip'] = $this->Proizvod_model->getAllForProizvod($this->session->broj);
                $nizp['num_messagesp'] = $this->Proizvod_model->num_messages($this->session->broj);
                $nizp['latest_messagesp'] = $this->Proizvod_model->get_messages($this->session->broj);
                if($url != 'proizvod' ) $this->session->set_flashdata('reg', 0);
                //$this->load->view('Proizvod', $nizp);
                return TRUE;
            }

            if ($url == 'Pocetna' || $url == 'IndexStrana') {
                $podaci['Prijave'] = $this->Prijave->ucitavanjePrijava();
                $podaci['Korisnici'] = $this->Korisnici->ucitavanjeKorisnika(0);

                $podaci['Videi'] = $this->NoviVidei->ucitavanjeVidea($this->session->UserName);
                $podaci['Proizvodi'] = $this->NoviProizvodi->ucitavanjeProizvoda($this->session->UserName);

                //$this->load->view('Pocetna', $podaci);
                return TRUE;
            }
            //echo $url;
            return FALSE;
        }
    }
    
    public function prethodna_strana() {

        $refering_url = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
        echo $refering_url;
        if ((strpos($refering_url, 'obrisiKomentarVideo') == true) ||(strpos($refering_url, 'obrisiKomentarProizvod') == true)) {
            $niz = explode('/', $refering_url);
            $duzina = sizeof($niz);
            $podaci['url'] = $niz[$duzina - 2];
            //$podaci['broj'] = $niz[$duzina-1];
            //$this->PopUp_model->postavi_broj($niz[$duzina-1]);
            echo $podaci['url'];
            return $podaci;
        } else {
            if (strpos($refering_url, 'video') == true || strpos($refering_url, 'proizvod') == true) {
                $niz = explode('/', $refering_url);
                $duzina = sizeof($niz);
                $podaci['url'] = $niz[$duzina - 3];
                //$podaci['broj'] = $niz[$duzina-1];
                $this->PopUp_model->postavi_broj($niz[$duzina - 1]);
                return $podaci;
            } else {
                //  echo $refering_url;
                $niz = explode('/', $refering_url);
                $duzina = sizeof($niz);
                $podaci['url'] = $niz[$duzina - 1];
                return $podaci;
            }
        }
    }
}

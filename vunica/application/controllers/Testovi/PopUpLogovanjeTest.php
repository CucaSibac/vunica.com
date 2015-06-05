<?php

//Ivana Lisanin 531/12

class PopUpLogovanjeTest extends CI_Controller{
    
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
        $this->login_Test();
    }
    
    public function login_Test(){
        $this->unit->run($this->login(),TRUE,"Testiranje autentifikacije");
        echo $this->unit->report();
    }


    public function login() {
        $podaci = $this->prethodna_strana();
        $url = $podaci['url'];
        if ($url == "zl")
            $url = $this->session->userdata('zl_prva');
        if ($url == "registration")
            $url = $this->session->userdata('prva');
        if ($url == "login")
            $url = $this->session->userdata('log_prva');
        else
            $this->PopUp_model->postavi_prvu_log_stranu($url);


        $this->load->library('form_validation');
        $this->form_validation->set_rules('email1', 'Email', 'trim|required|valid_email|callback_email1_check');
        $this->form_validation->set_rules('password1', 'Sifra', 'trim|required');
        $this->form_validation->set_message('required', '* Polje je prazno');
        $this->form_validation->set_message('valid_email', '* E-mail nije u odgovarajucem formatu');
        if ($this->form_validation->run() != TRUE)
            $this->session->set_flashdata('pri', 1);




        if ($url == 'Strikarnica' || $url == 'strikarnica') {
            $niz['num_videos'] = $this->Strikarnica_model->num_videos();
            $niz['latest_videos'] = $this->Strikarnica_model->get_videos();
            $this->load->view('Strikarnica', $niz);
        }

        if ($url == 'Pijaca' || $url == 'pijaca') {
            $niz['num_proizvod'] = $this->Pijaca_model->num_proizvod();
            $niz['latest_proizvod'] = $this->Pijaca_model->get_proizvod();
            $this->load->view('Pijaca', $niz);
        }

        if ($url == 'video' || $url == 'komentar' || $url == 'obrisiKomentarVideo' || $url == 'prijaviKomentarVideo' || $url == 'prijaviVideo') {
            $niz['podaci'] = $this->Video_model->getAllForVideo($this->session->broj);
            $niz['num_messages'] = $this->Video_model->num_messages($this->session->broj);
            $niz['latest_messages'] = $this->Video_model->get_messages($this->session->broj);
            if($url != 'video' ) $this->session->set_flashdata('pri', 0);
            $this->load->view('Video', $niz);
        }

        if ($url == 'proizvod' || $url == 'komentarp' || $url=='obrisiKomentarProizvod' ||$url == 'prijaviKomentarProizvod' || $url == 'prijaviProizvod') {

            $nizp['podacip'] = $this->Proizvod_model->getAllForProizvod($this->session->broj);
            $nizp['num_messagesp'] = $this->Proizvod_model->num_messages($this->session->broj);
            $nizp['latest_messagesp'] = $this->Proizvod_model->get_messages($this->session->broj);
            if($url != 'proizvod' ) $this->session->set_flashdata('pri', 0);
            $this->load->view('Proizvod', $nizp);
        }

        if ($url == 'Pocetna' || $url == 'IndexStrana') {
            $podaci['Prijave'] = $this->Prijave->ucitavanjePrijava();
            $podaci['Korisnici'] = $this->Korisnici->ucitavanjeKorisnika(0);

            $podaci['Videi'] = $this->NoviVidei->ucitavanjeVidea($this->session->UserName);
            $podaci['Proizvodi'] = $this->NoviProizvodi->ucitavanjeProizvoda($this->session->UserName);
            $this->load->view('Pocetna', $podaci);
        }


             echo $url;
             return true;
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


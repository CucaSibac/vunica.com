<?php

class PopUp extends CI_Controller {

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
                if($url != 'video' ) $this->session->set_flashdata('reg', 0);
                $this->load->view('Video', $niz);               
            }

            if ($url == 'proizvod' || $url == 'komentarp' || $url=='obrisiKomentarProizvod' ||$url == 'prijaviKomentarProizvod' || $url == 'prijaviProizvod') {
          
                $nizp['podacip'] = $this->Proizvod_model->getAllForProizvod($this->session->broj);
                $nizp['num_messagesp'] = $this->Proizvod_model->num_messages($this->session->broj);
                $nizp['latest_messagesp'] = $this->Proizvod_model->get_messages($this->session->broj);
                if($url != 'proizvod' ) $this->session->set_flashdata('reg', 0);
                $this->load->view('Proizvod', $nizp);
            }

            if ($url == 'Pocetna' || $url == 'IndexStrana') {
                $podaci['Prijave'] = $this->Prijave->ucitavanjePrijava();
                $podaci['Korisnici'] = $this->Korisnici->ucitavanjeKorisnika(0);
                ;
                $podaci['Videi'] = $this->NoviVidei->ucitavanjeVidea($this->session->UserName);
                ;
                $podaci['Proizvodi'] = $this->NoviProizvodi->ucitavanjeProizvoda($this->session->UserName);
                $podaci['NoviVidei'] = $this->NoviVidei->ucitavanjeNovihVidea();
                $podaci['NoviProizvodi'] = $this->NoviProizvodi->ucitavanjeNovihProizvoda();
                $this->load->view('Pocetna', $podaci);
            }
            echo $url;
        }
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
            ;
            $podaci['Videi'] = $this->NoviVidei->ucitavanjeVidea($this->session->UserName);
            ;
            $podaci['Proizvodi'] = $this->NoviProizvodi->ucitavanjeProizvoda($this->session->UserName);
            $podaci['NoviVidei'] = $this->NoviVidei->ucitavanjeNovihVidea();
            $podaci['NoviProizvodi'] = $this->NoviProizvodi->ucitavanjeNovihProizvoda();
            $this->load->view('Pocetna', $podaci);
        }


             echo $url;
    }

    public function logout() {
        $refering_url = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
        $this->PopUp_model->logout();
        redirect('http://localhost/vunica.com/vunica/index.php/Pocetna', 'refresh');
        ;
    }

    public function zl() {
        $podaci = $this->prethodna_strana();
        $url = $podaci['url'];

        if ($url == "registration")
            $url = $this->session->userdata('prva');
        if ($url == "login")
            $url = $this->session->userdata('log_prva');
        if ($url == "zl")
            $url = $this->session->userdata('zl_prva');
        else
            $this->PopUp_model->postavi_prvu_zl_stranu($url);

        $this->load->library('form_validation');
        $this->form_validation->set_rules('zlEmail', 'Email', 'trim|required|valid_email|callback_zlEmail_check');
        if ($this->form_validation->run() != TRUE)
            $this->session->set_flashdata('zl', 1);





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
            if($url != 'video' ) $this->session->set_flashdata('zl', 0);
            $this->load->view('Video', $niz);
        }

        if ($url == 'proizvod' || $url == 'komentarp' || $url=='obrisiKomentarProizvod' ||$url == 'prijaviKomentarProizvod' || $url == 'prijaviProizvod'){
            $nizp['podacip'] = $this->Proizvod_model->getAllForProizvod($this->session->broj);
            $nizp['num_messagesp'] = $this->Proizvod_model->num_messages($this->session->broj);
            $nizp['latest_messagesp'] = $this->Proizvod_model->get_messages($this->session->broj);
            if($url != 'proizvod' ) $this->session->set_flashdata('zl', 0);
            $this->load->view('Proizvod', $nizp);
        }

        if ($url == 'Pocetna' || $url == 'IndexStrana') {
            $podaci['Prijave'] = $this->Prijave->ucitavanjePrijava();
            $podaci['Korisnici'] = $this->Korisnici->ucitavanjeKorisnika(0);
            ;
            $podaci['Videi'] = $this->NoviVidei->ucitavanjeVidea($this->session->UserName);
            ;
            $podaci['Proizvodi'] = $this->NoviProizvodi->ucitavanjeProizvoda($this->session->UserName);
            $podaci['NoviVidei'] = $this->NoviVidei->ucitavanjeNovihVidea();
            $podaci['NoviProizvodi'] = $this->NoviProizvodi->ucitavanjeNovihProizvoda();
            $this->load->view('Pocetna', $podaci);
        }

       echo $url;
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
        if ($podaci == '')
            return false;

        $this->load->library('email');
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.gmail.com';   //examples: ssl://smtp.googlemail.com, myhost.com
        $config['smtp_user'] = 'vunica.com@gmail.com';
        $config['smtp_pass'] = '092810271993';
        $config['smtp_port'] = '465';
        $this->email->initialize($config);

        $this->email->from('vunica.com@gmail.com', 'Tim vunica.com');
        $this->email->to($this->input->post('zlEmail')); //
        $this->email->subject('Povratak lozinke');
        $this->email->message('Vasa sifra je: ' . $podaci); //      
        $this->email->send();
        return true;
    }

}

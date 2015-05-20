<?php

class PopUp extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('PopUp_model');
    }

    public function registration() {
        $this->load->library('form_validation');
        // field name, error message, validation rules
        $this->form_validation->set_rules('UserName', 'UserName', 'trim|required|min_length[4]');
        $this->form_validation->set_rules('ImePrezime', 'ImePrezime', 'trim|required|min_length[2]');
        $this->form_validation->set_rules('Email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('EmailPotvrda', 'EmailPotvrda', 'trim|required|matches[Email]');
        $this->form_validation->set_rules('Sifra', 'Sifra', 'trim|required|min_length[4]|max_length[32]');
        $this->form_validation->set_rules('con_password', 'Password Confirmation', 'trim|required|matches[Sifra]');

        if ($this->form_validation->run() == TRUE) {
            $this->PopUp_model->dodaj_korisnika();
            echo "uspesno ste se registrovali";
        } else
            echo"niste se registrovali";
    }

    public function login() {
        $email = $this->input->post('email1');
        $password = ($this->input->post('password1'));
        $result = $this->PopUp_model->login($email, $password);
        if($result) echo"uspesno ste obavili akciju";
        else        echo"niste uspesno obavili akciju";
    }

}

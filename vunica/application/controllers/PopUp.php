<?php

class PopUp extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('PopUp_model');        
    }

    public function registration() {
        $this->load->library('form_validation');
        // field name, error message, validation rules
        $this->form_validation->set_rules('UserName', 'UserName', 'trim|required|min_length[4]|is_unique[korisnik.UserName]');       
        $this->form_validation->set_rules('ImePrezime', 'ImePrezime', 'trim|required|min_length[2]');
        $this->form_validation->set_rules('Email', 'Email', 'trim|required|valid_email|is_unique[korisnik.Email]');
        $this->form_validation->set_rules('EmailPotvrda', 'EmailPotvrda', 'trim|required|matches[Email]');
        $this->form_validation->set_rules('Sifra', 'Sifra', 'trim|required|min_length[4]|max_length[32]');
        $this->form_validation->set_rules('con_password', 'Password Confirmation', 'trim|required|matches[Sifra]');

        if ($this->form_validation->run() == TRUE) {
            $this->PopUp_model->dodaj_korisnika();
            $date = array('slika' => '');
            $this->load->view('PostavljanjeProizvoda',$date);
        } else           
            //header("location:javascript://history.go(-1)");
            echo validation_errors();
            echo "<a href='javascript:history.go(-1);javascript:prikazi_registraciju();' class='dugme'>Vrati se nazad</a>";
    }

    public function login() {
        $refering_url = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '' ;
        $email = $this->input->post('email1');
        $password = ($this->input->post('password1'));
        $result = $this->PopUp_model->login($email, $password);
        if($result) redirect($refering_url, 'refresh');
        else        echo"niste uspesno obavili akciju";
    }
    
    public function logout(){
        $refering_url = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '' ;
        $this->PopUp_model->logout();
        if ($refering_url == 'http://localhost/vunica.com/vunica/index.php/PopUp/registration') redirect('http://localhost/vunica.com/vunica/index.php/Pocetna' , 'refresh');
        else redirect($refering_url, 'refresh');
    }
    
    public function zl(){      
        $podaci = $this->PopUp_model->zl($this->input->post('zlEmail'));
        if($podaci != ''){
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
            $this->email->send();
            echo "poslato";
        }
        else{
            
        }

    }
    
    public function UserName_check($str)
	{       echo $str;
		if ($str == 'test')
		{
			$this->form_validation->set_message('UserName_check', 'The %s field can not be the word "test"');
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}

}

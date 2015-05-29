<?php

// Ivana Lisanin, 531/12
// Teodora Aleksic, 391/12

class Ceger extends CI_Controller{
    
    private $kupovina;
    private $greske;
    
    public function __construct() {
        parent::__construct();
        
        $this->kupovina = array(
            'Proizvodi' => NULL,
            'Iznos' => 0,
            'DatumKupovine' => 0,
            
            'Grad' => '',
            'Ulica' => '',
            'Broj' => '',
            'PostanskiBroj' => '',
            
            'VrstaKartice' => '',
            'BrojKartice' => '',
            'SigurnosniBroj' => '',
            'DatumIsteka' => '',
        );
        
        $this->greske = array(
            'Kartica' => 0,
            'Adresa' => 0,
        ); 
        
        $this->load->model('Kupovina');
 
    }
  
    public function index(){
        if($this->session->UserName != ''){
            $this->resetujGreske();
            $this->load->view('Ceger', $this->greske);
        }
        else{
            $this->load->view('GreskaStrana');
        }   
    }
    
    // Resetuje sve greske na nulu
    protected function resetujGreske(){
        foreach($this->greske as $element){
            $element = 0;
        }
    }
    
    public function kupi(){
        $this->resetujGreske();
        
        $this->kupovina['Proizvodi'] = $this->session->Proizvodi;
        if($this->kupovina['Proizvodi'] != ''){
            if(count($this->kupovina['Proizvodi']) > 0){
                $this->obaviKupovinu(); 
            }
        }
                
        $this->load->view('Ceger', $this->greske);
    }


    protected function obaviKupovinu(){     
        $this->load->library('form_validation');

        // Kartica
        $this->kupovina['VrstaKartice'] = $this->input->post('vrstaKartice');

        $this->kupovina['BrojKartice'] = $this->input->post('karticabr');
        $this->form_validation->set_rules('karticabr', 'BrojKartice', 'required|trim|numeric|exact_length[16]');

        $this->kupovina['DatumIsteka'] = $this->input->post('datumisteka');
        $this->form_validation->set_rules('datumisteka', 'DatumIsteka', 'required|trim|exact_length[7]');
        $nizDatum  = explode('/', $this->kupovina['DatumIsteka']);
        $rezultat = checkdate($nizDatum[0], 31, $nizDatum[1]);

        $this->kupovina['SigurnosniBroj'] = $this->input->post('sigurnosni');
        $this->form_validation->set_rules('sigurnosni', 'SigurnosniBroj', 'required|trim|numeric|exact_length[4]');

        if($this->form_validation->run() != TRUE || $rezultat != TRUE){
            $this->greske['Kartica'] = 1;
            return FALSE;
        }

        // Adresa
        $this->kupovina['Grad'] = $this->input->post('grad');
        $this->form_validation->set_rules('grad', 'Grad', 'required|trim');

        $this->kupovina['PostanskiBroj'] = $this->input->post('postanski');
        $this->form_validation->set_rules('postanski', 'PostanskiBroj', 'required|trim|numeric');

        $this->kupovina['Ulica'] = $this->input->post('ulica');
        $this->form_validation->set_rules('ulica', 'Ulica', 'required|trim');
        
        $this->kupovina['Broj'] = $this->input->post('brojulice');
        $this->form_validation->set_rules('brojulice', 'Broj', 'required|trim|numeric');
        
        if($this->form_validation->run() != TRUE){
            $this->greske['Adresa'] = 1;
            return FALSE;
        }

        // Iznos
        $niz = $this->kupovina['Proizvodi'];
        $this->kupovina['Iznos'] = 0;
        foreach($niz as $red){
            $this->kupovina['Iznos'] += $red->Kolicina * $red->Cena;
        }

        // Datum
        $this->kupovina['DatumKupovine'] = date('d-m-y');

        // Zove model
        $this->Kupovina->kupi($this->kupovina);
        
        return TRUE;
    }
    
}


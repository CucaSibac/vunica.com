<?php

// Ivana Lisanin, 531/12
// Teodora Aleksic, 391/12

class Ceger extends CI_Controller{
    
    private $kupovina;
    private $greske;
    
    // Konstruktor
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
  
    // Indeks
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
                $ishod = $this->obaviKupovinu(); 
                if($ishod == TRUE){
                    $this->load->library('email');
                    $config['protocol'] = 'smtp';
                    $config['smtp_host'] = 'ssl://smtp.gmail.com';
                    $config['smtp_user'] = 'vunica.com@gmail.com';
                    $config['smtp_pass'] = '092810271993';
                    $config['smtp_port'] = '465';
                    $this->email->initialize($config);
                    
                    $poruka = $this->tekstPoruke($this->kupovina['Proizvodi']);

                    $this->email->from('vunica.com@gmail.com', 'Tim vunica.com');
                    $this->email->to($this->session->Email); 
                    $this->email->subject('Racun');
                    $this->email->message('Postovani korisnice, uspesno ste obavili svoju kupovinu.

Vas Racun je:

'
                            
                                           .$poruka
                            
                                           .'
Ukupan Iznos: '.$this->kupovina['Iznos'].'€'
                            
                                           .'
Informacije o Vasoj kartici su: 
Vrsta krtice: '.$this->kupovina['VrstaKartice']
                                           .'
Broj kartice: '.$this->kupovina['BrojKartice']
                                           .'
Datum isteka: '.$this->kupovina['DatumIsteka']
                                           .'
Sigurnosni broj: '.$this->kupovina['SigurnosniBroj']
                                           .'
                            
Adresa na koju cete primiti posiljku je: 
Grad: '.$this->kupovina['Grad']
                                           .'
Postanski broj: '.$this->kupovina['PostanskiBroj']
                                           .'
Ulica: '.$this->kupovina['Ulica']
                                           .'
Broj: '.$this->kupovina['Broj']
                                           .'
                            
Ako se neki od ovih podataka ne slazu sa Vasom kupovinom, kontaktirajte nas sto pre na: vunica.com@gmail.com
                                           
                            
Kupujte kod nas ponovo!'
                    );     
                    $this->email->send();
                    
                    $this->session->Proizvodi = '';
                    
                    // Obavestenje
                }
                else{
                    // Kupovina nije uspesno obavljena
                }
            }
        }
                
        $this->load->view('Ceger', $this->greske);
    }

    // Sastavlja telo za tekst e-mail racuna
    protected function tekstPoruke($niz){
        $poruka = '';
        
        foreach ($niz as $red){
            $poruka .= $red[1].' - '.$red[2].'€ - '.$red[3].' komad/a
                       ';
        } 
        
        return $poruka;
    }

    // Vrsi provere podataka i obavlja kupovinu
    protected function obaviKupovinu(){     
        $this->load->library('form_validation');

        // Kartica
        $this->kupovina['VrstaKartice'] = $this->input->post('vrstaKartice');

        $this->kupovina['BrojKartice'] = $this->input->post('karticabr');
        $this->form_validation->set_rules('karticabr', 'BrojKartice', 'required|trim|numeric|exact_length[16]');

        // Datum isteka
        $this->kupovina['DatumIsteka'] = $this->input->post('datumisteka');
        $this->form_validation->set_rules('datumisteka', 'DatumIsteka', 'required|trim|exact_length[7]');
        
        $nizDatum  = explode('/', $this->kupovina['DatumIsteka']);     
        $rezultat = checkdate($nizDatum[0], 1, $nizDatum[1]);
        
        if($rezultat == TRUE){
            $dani = cal_days_in_month(CAL_GREGORIAN, $nizDatum[0], $nizDatum[1]);
            
            $datumTekst = $nizDatum[1]."-".$nizDatum[0]."-".$dani;
            $datum = strtotime($datumTekst);
            $trenutniDatum = date('Y-m-d');
            
            if($datum > $trenutniDatum){     
                $this->kupovina['DatumIsteka'] = $datumTekst;
            }
            else {             
                $rezultat = FALSE;
            }
        }

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
        $i = 0;
        for(;$i < count($niz);$i++){
            $cena = (int)($niz[$i][2]);
            $kolicina = (int)($niz[$i][3]);
            $this->kupovina['Iznos'] += ($kolicina * $cena);
        }

        // Datum
        $this->kupovina['DatumKupovine'] = date('Y-m-d');

        // Zove model
        $ishod = $this->Kupovina->kupi($this->kupovina);
        
        return $ishod;
    }
    
    // Izbacuje proizvod iz sesije
    public function izbaciProizvod($id){
        $niz = $this->session->Proizvodi;
        
        $indeks = $this->nadjiIndeks($niz, $id);
        
        unset($niz[$indeks]);     
        $this->session->Proizvodi = array_values($niz);
        
        $this->resetujGreske();
        $this->load->view('Ceger', $this->greske);  
    }
    
    // Nalazi proizvod u sesiju
    protected function nadjiIndeks($niz, $id){
        $i = 0;
        for(;$i < count($niz);$i++){
            if($niz[$i][0] == $id){
               return $i;
            }
        }
    }
    
}


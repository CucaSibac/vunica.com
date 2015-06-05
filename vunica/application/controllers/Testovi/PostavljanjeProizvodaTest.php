<?php
/*Ivana Lisanin 531/12 */

class PostavljanjeProizvodaTest extends CI_Controller {
    
    public function __construct() {
        parent::__construct();  
    }
    
    public function index() {
        $this->load->library('unit_test');
        $this->adresa_Test();
        $this->ProGreska_check_Test();
    }
    
    // (1) Funkcija koja testira
    public function adresa_Test(){
        $this->unit->run($this->adresa("C:/Users/IcySch/Pictures/Bzvz/auto.jpg"), 'http://vunica.azurewebsites.net/vunica/index.php/application/Proizvod/auto.jpg', 'Testiranje putanje slike'); 
    }
    
    // (2) Funkcija koja testira
    public function ProGreska_check_Test(){
        $this->unit->run($this->ProGreska_check("vrednost se ne koristi"),FALSE,"Testiranje greske proizvoda");
        echo $this->unit->report();
    }


    // (1) Funkcija koja se testira
    function adresa($url) {
        $niz = explode('/', $url);
        $duzina = sizeof($niz);
        $novi_url = "";
        for ($i = $duzina - 2; $i < $duzina; $i++) {
            $novi_url .= $niz[$i];
            if ($i != $duzina - 1)
                $novi_url .= '/';
        }
        return 'http://vunica.azurewebsites.net/vunica/application/Slike/' . $novi_url;
    }
    
    function ProGreska_check($str){       
        $url =$this->session->userdata('proSlika');             
        if($url == '') {
            $this->session->set_flashdata('proGreska2',1);
            return false;
        }
        else return true;
   }


}


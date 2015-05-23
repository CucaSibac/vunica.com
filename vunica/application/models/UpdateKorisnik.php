<?php


class UpdateKorisnik extends CI_Model {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function promeniKorisnika($korisnik){
        $this->db->where('UserName', $this->session->UserName);
        $promene = 0;
        $data = array();

        if($korisnik['Godine'] != NULL && $korisnik['Godine'] != $this->session->Godine){
            $this->session->Godine = $data['Godine'] = $korisnik['Godine'];
            ++ $promene;
        }

        if($korisnik['Pol'] != $this->session->Pol){
            $this->session->Pol = $data['Pol'] = $korisnik['Pol'];
            ++ $promene;
        }

        if($korisnik['Lokacija'] != '' && $korisnik['Lokacija'] != $this->session->Lokacija){
            $this->session->Lokacija = $data['Lokacija'] = $korisnik['Lokacija'];
            ++ $promene;
        }

//            if($korisnik['Slika'] != '' && $korisnik['Slika'] != $this->session->Slika){
//                $this->session->Slika = $data['Slika'] = $korisnik['Slika'];
//                ++ $promene;
//            }

        if($korisnik['ImePrezime'] != '' && $korisnik['ImePrezime'] != $this->session->ImePrezime){
            $this->session->ImePrezime = $data['ImePrezime'] = $korisnik['ImePrezime'];
            ++ $promene;
        }

        if($korisnik['Email'] != NULL && $korisnik['Email'] != $this->session->Email){
            $this->session->Email = $data['Email'] = $korisnik['Email'];
            ++ $promene;
        }

        if($korisnik['Lozinka'] != NULL){
            $data['Sifra'] = $korisnik['Lozinka'];
            ++ $promene;
        }

        if($korisnik['Opis'] != '' && $korisnik['Opis'] != $this->session->Opis){
            $korisnik['Opis'] != $this->session->Opis = $data['Opis'] = $korisnik['Opis'];
            ++ $promene;
        }

        if($promene > 0){
            $this->db->update('korisnik', $data); 
        }
    }
    
    public function nadjiEmail($email){
        if($email != NULL){
            $this->db->select('*');
            $this->db->from('korisnik');
            $this->db->where('Email', $email);
            $this->db->where_not_in('UserName', $this->session->UserName);

            $upit = $this->db->get();
            if($upit->num_rows() > 0) {
                return FALSE;
            }
        }
        return TRUE;
    }
}

<!-- Tijana Trifunovic 311/12-->
<?php


class Strikarnica_model extends CI_Model {
    //funkcija dohvata sve podatke koje su potrebne za video iz tabela Video, Korisnik, ProduktKorisnik za stranu video
    /*function getAllVideo() {
        $this->db->select('*');
        $this->db->from('video');
        $this->db->order_by("Datum", "desc");
        
        $upit = $this->db->get();
        if($upit->num_rows() > 0) {
            foreach ($upit->result() as $red){
                $niz[] = $red;
            }
        }
        //print_r($niz);
        return $niz;
    }*/
    
    function get_videos($offset = 0){
        $this->db->order_by('IDVideo', 'desc');
	$query = $this->db->get('Video', 8, $offset);
	return $query->result();
    }
    
    
    function num_videos() {
        $query = $this->db->count_all_results('video');
	return $query;
    }
}

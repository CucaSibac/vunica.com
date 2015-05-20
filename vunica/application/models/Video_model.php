<!-- Tijana Trifunovic 311/12-->
<?php


class Video_model extends CI_Model {
    //funkcija dohvata sve podatke koje su potrebne za video iz tabela Video, Korisnik, ProduktKorisnik za stranu video
    function getAllForVideo($vrednost) {
        $niz = null;
        $this->db->select('*');
        $this->db->from('video');
        $this->db->where('IDVideo', $vrednost);
        
        $upit = $this->db->get();
        if($upit->num_rows() > 0) {
            foreach ($upit->result() as $red){
                $niz[] = $red;
            }
        }
        return $niz;
    }
    
    function get_messages($vrednost, $offset = 0 ){
        $this->db->where('IDVideo', $vrednost);
        $this->db->order_by('IDKomentar', 'desc');
	$query = $this->db->get('komentarvideo', 3, $offset);
	return $query->result();
    }
    
    
    function num_messages($vrednost) {
        $this->db->where('IDVideo', $vrednost);
        $query = $this->db->count_all_results('komentarvideo');
        echo $query;
	return $query;
    }
    
}

<!-- Tijana Trifunovic 311/12-->
<?php


class Video_model extends CI_Model {
    //funkcija dohvata sve podatke koje su potrebne za video iz tabela Video, Korisnik, ProduktKorisnik za stranu video
    function getAllForVideo($vrednost) {
        $niz = null;
        $this->db->select('video.IDVideo, video.UserName, video.Datum, video.Naziv, video.Opis, video.Slika, video.Video, video.Kategorija, video.Tezina, korisnik.IDKorisnik');
        $this->db->from('video');
        $this->db->join('korisnik', 'korisnik.UserName = video.UserName');
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
        $this->db->select('komentarvideo.IDKomentar, komentarvideo.UserName, komentarvideo.Datum, komentarvideo.Vreme, komentarvideo.Tekst, komentarvideo.IDVideo, prijavakomentarvideo.Komentar');
        $this->db->where('IDVideo', $vrednost);
        $this->db->order_by('komentarvideo.IDKomentar', 'desc');
        $this->db->join('prijavakomentarvideo', 'prijavakomentarvideo.IDKomentar = komentarvideo.IDKomentar', 'left');
        $this->db->group_by('komentarvideo.IDKomentar');
	$query = $this->db->get('komentarvideo', 3, $offset);
	return $query->result();
    }
    
    
    function num_messages($vrednost) {
        $this->db->where('IDVideo', $vrednost);
        $query = $this->db->count_all_results('komentarvideo');
      //  echo $query;
	return $query;
    }
    
    
    function novikomentar() {
        $data = array (
            'UserName' => ($this->input->post('UserName')),
                    'Datum' => (date("Y.m.d")),
                    'Vreme' => (date("H:i:s")),
                    'Tekst' => ($this->input->post('Tekst')),
                    'IDVideo' => ($this->input->post('IDVideo'))
    );
        $this->db->insert('komentarvideo', $data);
    }
}

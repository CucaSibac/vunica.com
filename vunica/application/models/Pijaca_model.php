<!-- Tijana Trifunovic 311/12-->
<?php


class Pijaca_model extends CI_Model {
    
    function get_proizvod($offset = 0){
        $this->db->order_by('IDProizvod', 'desc');
	$query = $this->db->get('proizvod', 8, $offset);
	return $query->result();
    }
    
    
    function num_proizvod() {
        $query = $this->db->count_all_results('proizvod');
	return $query;
    }
}

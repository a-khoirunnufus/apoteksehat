<?php 
 
class Obat_Model extends CI_Model{	
	function get_all(){
		return $this->db->get('obat')->result();
	}	
}
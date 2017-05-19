<?php 
	class Etudiant extends CI_Model{
		public function __construct(){
			parent::__construct();
		}
		public function getEtudiant(){
			$query = $this->db->get("Etudiant"); 
			return $query->result(); 
		}
		public function ficheEtudiant($param){
			return $this->db->get_where("Etudiant",array('nom'=>'Miorantsoa'));
		}
	}
?>
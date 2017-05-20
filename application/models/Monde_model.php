<?php
/**
 * Created by PhpStorm.
 * User: Toavina RALAMBOSOA
 * Date: 20/05/2017
 * Time: 22:58
 */
class Monde_model extends CI_Model{


    public function __construct(){
        parent::__construct();
    }

    public function getAllMonde(){
        $query = $this->db->get("monde");
        return $query->result();
    }
    public function getMondeById($statut){
        $this->db->where('statut', $statut);
        $query = $this->db->get("monde");
        return $query->result();
    }

    public function insertMonde($designation, $description, $iduser){
        $data = array(
            'designation'   => $designation,
            'description'   => $description,
            'statut'   => 0,
            'iduser'   => $iduser
        );
        $this->db->insert('monde', $data);
    }

    public function insertTicket($iduser,$idTarif, $idMonde,$quantite, $datedebut, $datefin, $idType){
        if($datefin == null) $datefin = $datedebut;
        try{
            $data = array(
                'iduser'   => $iduser,
                'idTarif'   => $idTarif,
                'idMonde'   => $idMonde,
                'quantite'   => $quantite,
                'datedebut'   => $datedebut,
                'datefin'   => $datefin,
                'idType'   => $idType
            );
            $this->db->insert('ticket', $data);
        }catch (Exception $e){

        }
    }



    public function ficheEtudiant($param){
        return $this->db->get_where("Etudiant",array('nom'=>'Miorantsoa'));
    }


    function allModel($table, $column=null, $value=null){
        if($column != null){
            $this->db->where($column, $value);
        }
        $query = $this->db->get($table);

        return $query->result();
    }
}
?>
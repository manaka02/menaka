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

    public function insertVote($idmonde){
        if(is_numeric($idmonde)){
        $user = $this->session->userdata('user');
            try {
                $data = array(
                    'idvote' => '',
                    'iduser'   => $user[0]->iduser,
                    'idmonde'   => $idmonde,
                    'valeur'  => 1
                );
                $this->db->insert('vote', $data);
            } catch (Exception $e) {
                throw new Exception($e->getMessage());
            }
        }
    }

    public function updateVote($idmonde, $iduser, $valeur){
        try {
            $data = array(
                'valeur' => $valeur-1
        );
            $this->db->where(array('iduser' => $iduser,'idmonde' => $idmonde));
            $this->db->update("user",$data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function getVoteParId($idmonde,$iduser){
        try {
            $query = $this->db->get_where('vote',array('iduser' => $iduser, 'idmonde' => $idmonde));
            return $query->result();
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    public function getNumberRowsAll(){
        $data['monde'] = $this->db->count_all('monde');
        $data['ticket'] = $this->db->count_all('ticket');
        $data['user'] = $this->db->count_all('user');
        $data['vote'] = $this->db->count_all('vote');

        return $data;
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
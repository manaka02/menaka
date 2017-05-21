<?php
defined('BASEPATH') OR exit('No redirect script access allowed');

class Accueil extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Monde_model');
    }
    public function index(){
        $data['tarifs'] = $this->Monde_model->allModel('tarif');
        $data['content'] = "message d'accueil";
        $data['contents'] = "accueil";
        $this->load->view('default',$data);

    }

    public function Preparer(){
        $listeMonde = $this->Monde_model->allModel('monde', 'statut', '1');
        $listeTarifs = $this->Monde_model->allModel('tarif');
        $idUser = 1;
        $data['listeMonde'] = $listeMonde;
        $data['listeTarifs'] = $listeTarifs;
        $data['idUser'] = $idUser;
        $data['contents'] = 'PreparerSejour.php';
        $data['titre'] = "Préparer votre voyage";
        $this->load->view('default',$data);
    }
    public function NosUnivers(){
        $data['contents'] = "NosMondes";
        $data['titre'] = "Nos univers";
        $this->load->view('default',$data);
    }
    public function NouveauMonde(){
        $data['ajoutVote'] = 0;
        $data['contents'] = "vote";
        $data['titre'] = "Proposer un nouvel univers";
        $this->load->view('default',$data);
    }
    public function effectuerVote($id = '',$iduser = ''){
        $vote = $this->Monde_model->getVoteParid($id,$iduser);
        if(isset($user)){
            $this->Monde_model->updateVote($id,$iduser,$vote[0]->valeur);
        }else{
            $this->Monde_model->insertVote($id);
        }
        $data['ajoutVote'] = $vote[0]->valeur;
    }
    public function listeVote(){
        echo json_encode($this->Monde_model->getAllMonde());
    }
}
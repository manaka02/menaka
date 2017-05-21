<?php
defined('BASEPATH') OR exit('No redirect script access allowed');

class Accueil extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Monde_model');
    }
    public function index(){
        $data['content'] = "message d'accueil";
        $data['contents'] = "accueil";
        $this->load->view('default',$data);
    }

    public function preparer(){
        $listeMonde = $this->Monde_model->allModel('monde', 'statut', '1');
        $listeTarifs = $this->Monde_model->allModel('tarif');
        $idUser = 1;
        $data['listeMonde'] = $listeMonde;
        $data['listeTarifs'] = $listeTarifs;
        $data['idUser'] = $idUser;
        $data['contents'] = 'PreparerSejour.php';
        $this->load->view('default',$data);
    }
    public function nosMondes(){
        $data['contents'] = "NosMondes";
        $this->load->view('default',$data);
    }
    public function vote(){
        $data['contents'] = "vote";
        $this->load->view('default',$data);
    }
    public function effectuerVote($id = ''){
        $this->Monde_model->getVoteParid($id);
        $this->Monde_model->insertVote($id);
    }
}
<?php
defined('BASEPATH') OR exit('No redirect script access allowed');

class Ticket extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Monde_model');
    }

    public function index(){

    }

    public function ajouter(){
        $iduser = $this->input->post('iduser');
        $idTarif = $this->input->post('tarif');
        $idMonde = $this->input->post('monde');
        $quantite = $this->input->post('quantite');
        $datedebut = $this->input->post('date');
        $datefin = $this->input->post('datefin');
        $idType = $this->input->post('type');

        $this->Monde_model->insertTicket($iduser,$idTarif, $idMonde,$quantite, $datedebut, $datefin, $idType);


        switch ($idMonde) {
            case '1':
                redirect('Details');
                break;

            case '2':
                redirect('Details/prehistoire');
                break;

            case '3':
                redirect('Details/gasy');
                break;
        }
    }

    public function gasy(){
        $data['content'] = "message d'accueil";
        $data['contents'] = "detailsww2";
        $this->load->view('detailsgasy',$data);
    }

    public function prehistoire(){
        $data['content'] = "message d'accueil";
        $data['contents'] = "detailsph";
        $this->load->view('default',$data);
    }
}
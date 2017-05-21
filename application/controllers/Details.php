<?php
defined('BASEPATH') OR exit('No redirect script access allowed');

class Details extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }

    public function WorldWarII(){
        $data['content'] = "message d'accueil";
        $data['contents'] = "detailsww2";
        $data['titre'] = "Nos univers > World War II";
        $this->load->view('default',$data);
    }

    public function GasyRoyalty(){
        $data['content'] = "message d'accueil";
        $data['contents'] = "detailsgasy";
        $data['titre'] = "Nos univers > Gasy Royalty";
        $this->load->view('default',$data);
    }

    public function PreHistory(){
        $data['content'] = "message d'accueil";
        $data['titre'] = "Nos univers > Prehistory";
        $data['contents'] = "detailsph";
        $this->load->view('default',$data);
    }
}
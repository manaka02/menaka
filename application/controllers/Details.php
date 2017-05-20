<?php
defined('BASEPATH') OR exit('No redirect script access allowed');

class Details extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $data['content'] = "message d'accueil";
        $data['contents'] = "detailsww2";
        $this->load->view('detailsww2',$data);
    }

    public function gasy(){
        $data['content'] = "message d'accueil";
        $data['contents'] = "detailsww2";
        $this->load->view('detailsgasy',$data);
    }

    public function prehistoire(){
        $data['content'] = "message d'accueil";
        $data['contents'] = "detailsph";
        $this->load->view('detailsph',$data);
    }
}
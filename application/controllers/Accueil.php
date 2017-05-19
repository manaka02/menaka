<?php
defined('BASEPATH') OR exit('No redirect script access allowed');

class Accueil extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $data['content'] = "message d'accueil";
        $this->load->view('templates/header.php');
        $this->load->view('accueil',$data);
        $this->load->view('templates/footer.php');
    }
}
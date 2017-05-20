<?php
defined('BASEPATH') OR exit('No redirect script access allowed');

class Accueil extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->load->view('PreparerSejour.php');
    }
}
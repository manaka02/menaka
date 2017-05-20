<?php
defined('BASEPATH') OR exit('No redirect script access allowed');
/**
 * Created by PhpStorm.
 * User: Toavina RALAMBOSOA
 * Date: 21/05/2017
 * Time: 00:57
 */
class Vote extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Monde_model');
    }

    public function index()
    {
        try {
            $iduser = $this->input->get('iduser');
            $idvote = $this->input->get('idvote');
            $this->Monde_model->insertVote($iduser, $idvote);
        } catch (Exception $e) {
            var_dump("misy tsy mety le vote");
        }

    }
}
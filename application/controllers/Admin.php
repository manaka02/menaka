<?php
/**
 * Created by PhpStorm.
 * User: Toavina RALAMBOSOA
 * Date: 21/05/2017
 * Time: 03:26
 */

defined('BASEPATH') OR exit('No redirect script access allowed');

class Admin extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Monde_model');
        $this->load->library('grocery_CRUD');
        date_default_timezone_set('Asia/Dubai');
    }

    public function index(){
        $crud = new grocery_CRUD();
        $crud->set_table('ticket');
        $crud->set_relation('idmonde', 'monde', 'designation');
        $crud->set_relation('iduser', 'user', 'nom');
        $crud->set_relation('idtarif', 'tarif', 'designation');
        $crud->set_relation('idtype', 'type', 'designation');
        $output = $crud->render();

        $data['number'] = $this->Monde_model->getNumberRowsAll();
        $data['name'] = 'ticket';
        $data['output'] = (array)$output;
        $data['contents'] = 'insert_aide';
        //$this->_example_output($output);
        $this->load->view('admin/index' ,$data);

    }

    public function tarif(){
        $crud = new grocery_CRUD();
        $crud->set_table('tarif');
        $output = $crud->render();
        $data['number'] = $this->Monde_model->getNumberRowsAll();
        $data['name'] = 'tarifs';
        $data['output'] = (array)$output;
        $data['contents'] = 'insert_aide';
        //$this->_example_output($output);
        $this->load->view('admin/index' ,$data);

    }

    public function monde(){
        $crud = new grocery_CRUD();
        $crud->set_table('monde');
        $crud->set_relation('createur', 'user', 'nom');
        $output = $crud->render();
        $data['number'] = $this->Monde_model->getNumberRowsAll();
        $data['name'] = 'mondes';
        $data['output'] = (array)$output;
        $data['contents'] = 'insert_aide';
        //$this->_example_output($output);
        $this->load->view('admin/index' ,$data);

    }

    public function utilisateur(){
        $crud = new grocery_CRUD();
        $crud->set_table('user');
        $output = $crud->render();
        $data['number'] = $this->Monde_model->getNumberRowsAll();
        $data['name'] = 'utilisateurs';
        $data['output'] = (array)$output;
        $data['contents'] = 'insert_aide';
        //$this->_example_output($output);
        $this->load->view('admin/index' ,$data);

    }


}
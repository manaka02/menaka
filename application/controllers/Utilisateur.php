<?php
class Utilisateur extends CI_Controller {
    Public function __construct()
    {
        parent::__construct();
        $this->load->model('UtilisateurDao');
    }

    public function index()
    {
//        if ($this->session->has_userdata('email')){
//            $this->session->sess_destroy();
//        }
        if (!$this->session->has_userdata('user'))
        {
            $this->form_validation->set_rules('mail', 'Email', 'trim|required|min_length[4]|max_length[30]');
            $this->form_validation->set_rules('pass', 'Mot de passe', 'trim|required|min_length[2]|alpha_dash');
            if ($this->form_validation->run())
            {
                $login=$this->input->post('mail');
                $pass=$this->input->post('pass');
                try{
                    $user=$this->UtilisateurDao->login($login,$pass);
                    $this->session->set_userdata('user', $user);
                    redirect('Accueil');
                }catch(Exception $e){
                    $data['error'] = "email ou mot de passe incorrect";
                    $this->load->view('login',$data);
                }
            }
            else{
                $this->load->view('login');
            }
        }
        else{
            redirect('Accueil');
        }
    }

    public function Inscription()
    {
//        if ($this->session->has_userdata('email')){
//            $this->session->sess_destroy();
//        }
        if (!$this->session->has_userdata('mail'))
        {
            $this->form_validation->set_rules('nom', 'Nom', 'trim|required|min_length[1]');
            $this->form_validation->set_rules('prenom', 'Prenom', 'trim|required|min_length[1]');
            $this->form_validation->set_rules('mail', 'Email', 'trim|required|min_length[4]|max_length[30]');
            $this->form_validation->set_rules('pass', 'Mot de passe', 'trim|required|min_length[2]|alpha_dash');
            $this->form_validation->set_rules('confirm_pass', 'Confirm Password', 'required|matches[pass]');
            if ($this->form_validation->run())
            {
                $nom=$this->input->post('nom');
                $prenom=$this->input->post('prenom');
                $login=$this->input->post('mail');
                $pass=$this->input->post('pass');
                try{
//                    $this->UtilisateurDao->save($nom,$prenom,$login,$pass);
                }catch(Exception $e){
                    $data['error'] = "Erreur lors de l'inscription de l'utilisateur.";
                    $this->load->view('inscription',$data);
                }
            }
            else{
                $this->load->view('inscription');
            }
        }
        else{
            redirect('Accueil');
        }
    }

    public function Deconnexion()
    {
        $this->session->sess_destroy();
				redirect();
    }


}
?>

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
            $data['redirection'] = "";
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
                    $data['contents'] = "login";
                    $this->load->view('default',$data);
                }
            }
            else{
                $data['contents'] = "login";
                $this->load->view('default',$data);
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
            $this->form_validation->set_rules('nom_ins', 'Nom', 'trim|required|min_length[1]');
            $this->form_validation->set_rules('prenom_ins', 'Prenom', 'trim|required|min_length[1]');
            $this->form_validation->set_rules('mail_ins', 'Email', 'trim|required|min_length[4]|max_length[30]');
            $this->form_validation->set_rules('pass_ins', 'Mot de passe', 'trim|required|min_length[2]|alpha_dash');
            $this->form_validation->set_rules('confirm_pass', 'Confirm Password', 'required|matches[pass_ins]');
            $data['redirection'] = "";
            if ($this->form_validation->run())
            {
                $nom=$this->input->post('nom_ins');
                $prenom=$this->input->post('prenom_ins');
                $login=$this->input->post('mail_ins');
                $pass=$this->input->post('pass_ins');
                try{
                    $this->UtilisateurDao->save($nom,$prenom,$login,$pass);
                    $data['contents'] = "login";
                    $data['redirection'] = "#login";
                    $this->load->view('default',$data);
                }catch(Exception $e){
                    $data['error'] = "Erreur lors de l'inscription de l'utilisateur.";
                    $data['contents'] = "login";
                    $data['redirection'] = "#inscription";
                    $this->load->view('default',$data);
                }
            }
            else{
                $data['contents'] = "login";
                $data['redirection'] = "#inscription";
                $this->load->view('default',$data);
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

<?php
Class UtilisateurDao extends CI_Model{

    Public function __construct()
    {
        parent::__construct();
    }
    public function save($nom,$prenom,$mail,$pass)
    {
        $this->load->database();
        $data = array(
            'iduser' => '',
            'nom' => $nom,
            'prenom' => $prenom,
            'mail' => $mail,
            'pass' => $pass
        );

        $this->db->insert("user", $data);
        return $this->db->insert_id();
    }
    public function update($id,$nom,$prenom,$mail,$pass){
        $data = array(
            'nom' => $nom,
            'prenom' => $prenom,
            'mail' => $mail,
            'prenom' => $pass
        );
        $this->db->where(array('iduser' => $id));
        return $this->db->update("user",$data);
    }
    public function delete($id){
        $this->db->where('iduser', $id);
        return $this->db->delete("user");
    }
    Public function findAll()
    {
        $res = $this->db->get('user');
        if ($res->num_rows() > 0) {
            $data = array();
            foreach ($res->result() as $row) {
                $resultat = new UtilisateurModel();
                $this->creer($resultat, $row);
                array_push($data,$resultat);
            }
            return $data;
        }
        return 'FALSE';
    }

    public function findById($utilisateur){
        $query = $this->db->get_where('user',array('utilisateur' => $utilisateur));
        if ($query->num_rows() > 0) {
            $resultat = new UtilisateurModel();
            $this->creer($resultat, $query->row());
            return $resultat;
        }
        log_message('error', 'Utilisateur introuvable');
    }
    public function login($email, $password){
        $query = $this->db->get_where('user',array('mail' => $email,'pass' => $password));
        if ($query->num_rows() == 1) {
            return $query->result();
        }else{
            throw new Exception('Email ou mot de passe incorrect ! Veuillez vous assurer de vos identifiants');
        }
    }
//    public function findById($id){
//        $query = $this->db->get_where('categorie',array('idutilisateur' => $id));
//        return $query->row();
//    }
    public function creer($model, $res)
    {
        $model->setId($res->idetudiant);
        $model->setEmail($res->email);
        $model->setPassword($res->password);
        $model->setHierarchie($res->hierarchie);
    }
}
?>

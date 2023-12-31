<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends BDDObject{

    protected $table = 'client';

    public function payer_client($montant,$idclient){
        $update = array(
            'sortie' => $montant
        );

        $this->db->where('idclient', $idclient);
        $this->db->update('porteMonnaie', $update);
    }


    public function getMvt($idclient){
        $sql = "SELECT client.*,porteMonnaie.entree,porteMonnaie.sortie from client JOIN porteMonnaie 
        ON client.idclient = porteMonnaie.idclient WHERE client.idclient = ".$idclient;
    

        $query = $this->db->query($sql);
                
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function getMontant($idclient){
        $all = $this->getMvt($idclient);
        $debit = 0;
        $credit = 0;
        foreach ($all as $a) {
            $debit += $a->entree;
            $credit += $a->sortie;
        }

        return $debit - $credit;

    }

    public function se_connecter($mail, $password)
    {
        $this->db->where('email', $mail);
        $this->db->where('motdepasse', $password);
        $query = $this->db->get('client');

        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return false;
        }
    }

    public function idclient(){
        $var = $this->getAll('*',"idclient = (select max(idclient) from client)");
        return $var[0]->idclient;

    }

    public function inscrire_profil($nom,$prenom,$dtn,$genre,$taille,$poids,$idclient){
        $data = array(
            'nom' => $nom,
            'prenom' => $prenom,
            'dtn' => $dtn,
            'idgenre' => $genre,
            'taille' => $taille,
            'poids' => $poids,
            'idclient'=>$idclient
        );
    
        $this->db->insert('profil', $data);

        if ($this->db->affected_rows() > 0) {
            return true; 
        } else {
            return false;
        }
    }

    public function inscrire_utilisateur($email,$mdp){
        $data = array(
            'email' => $email,
            'motdepasse' => $mdp
        );
        $this->db->insert('client', $data);

        if ($this->db->affected_rows() > 0) {
            return true; 
        } else {
            return false;
        }
    }

}

?>
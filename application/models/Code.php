<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Code extends BDDObject {
    protected $table = 'code';

    public function getAllCode(){
        $sql = "SELECT * from code where idcode not in (SELECT idcode FROM codeClient)";
    

        $query = $this->db->query($sql);
                
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function verifierSiExist($numero){
        $this->db->where('numero', $numero);
        
        $query = $this->db->get($this->table);

        if ($query->num_rows() == 1) {
            return true;
        } else {
            return false;
        }
    }

    // na efa inserer na demande
    public function siDejaLa($idcode){
        $this->db->where('idcode', $idcode);
        
        $query = $this->db->get('codeClient');
        // print_r($query->num_rows());

        if ($query->num_rows() >= 1) {
            return true;
        } else {
            return false;
        }
    }

    public function codeByNumero($numero){
        $sql = "SELECT * from code where numero=".$numero;

        $query = $this->db->query($sql);
                
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function insererDemande($idclient,$idcode){
        $data = array(
            'idclient'=>$idclient,
            'idcode'=>$idcode,
            'etat'=>0
        );
        $this->db->insert('codeClient',$data);
    }



    // admin
    public function listeDemandeCode(){
        $sql = "SELECT codeClient.idcodeClient,codeClient.etat,client.*,code.* 
        FROM codeClient 
        JOIN code
        ON codeClient.idcode = code.idcode
        JOIN client
        ON codeClient.idclient = client.idclient
        WHERE etat=0";

        $query = $this->db->query($sql);
                
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function codeClientById($idcodeClient){
        $sql = "SELECT codeClient.idcodeClient,codeClient.etat,client.*,code.* 
        FROM codeClient 
        JOIN code
        ON codeClient.idcode = code.idcode
        JOIN client
        ON codeClient.idclient = client.idclient
        WHERE idcodeClient =".$idcodeClient;

        $query = $this->db->query($sql);
                
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function updateCodeClient($idcodeClient){
        $update = array(
            'etat' => 1
        );

        $this->db->where('idcodeClient', $idcodeClient);
        $this->db->update('codeClient', $update);
    }

    public function debitPorteMonnaie($idclient,$vola){
        $data = array(
            'idclient'=>$idclient,
            'entree'=>$vola,
            'sortie'=>0
        );

        $this->db->insert('porteMonnaie',$data);
    }

}

?>
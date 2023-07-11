<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regime extends BDDObject {

    protected $table = 'regime';

    public function getRepasRegime($idregime){
        $sql = "select regimeRepas.*,regime.nom,regime.prixunitaire,regime.duree,regime.variationPoids,repas.nomrepas,objectif.idobjectif,objectif.nomobjectif from regimeRepas 
        join regime on regimeRepas.idregime=regime.idregime 
        join repas on regimeRepas.idrepas=repas.idrepas
        join objectif on regime.idobjectif=objectif.idobjectif WHERE regime.idregime = ".$idregime;
        $query = $this->db->query($sql);
        
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

    public function updateRegime($idregime,$data){
        $update = array(
            'nom' =>$data['nomregime'],
            'idobjectif' =>$data['objectif'],
            'duree' =>$data['duree'],
            'variationPoids' =>$data['variation'],
            'prixUnitaire' =>$data['pu']
        );

        $this->db->where('idregime', $idregime);
        $this->db->update($this->table, $update);
    }

    public function insertRegime($data){
        $arr = array(
            'nom'=>$data['nom'],
            'idobjectif'=>$data['objectif'],
            'variationPoids'=>$data['variationPoids'],
            'duree'=>$data['duree'],
            'prixUnitaire'=>$data['pu']
        );
        $this->db->insert($this->table,$arr);

        $last_insert_id = $this->db->insert_id();

        $id = $_POST['idrepas'];
        for ($i=0; $i < count($id); $i++) { 
            $data1 = array(
                'idregime'=>$last_insert_id,
                'idrepas'=>$id[$i]
            );
            $this->db->insert('regimeRepas',$data1);
        }
        

    }

    public function getRegimeObjectif($idObjectif){
        $this->db->where('idobjectif', $idObjectif);
        $query = $this->db->get('regime');
        return $query->result();
        
    }

    public function getRegime_byid($idregime){
        $this->db->where('idregime', $idregime);
        $query = $this->db->get('regime');
        return $query->result();
    }

    public function getSport($idObjectif){
        $this->db->where('idobjectif', $idObjectif);
        
        $query = $this->db->get('sport');
        return $query->result();
    }


}

?>
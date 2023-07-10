<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regime extends BDDObject {

    protected $table = 'regime';

    public function getRepasRegime($idregime){
        $sql = "select regimeRepas.*,regime.nom,regime.prixunitaire,regime.duree,regime.variationPoids,repas.nomrepas,objectif.idobjectif,objectif.nomobjectif from regimerepas 
        join regime on regimerepas.idregime=regime.idregime 
        join repas on regimerepas.idrepas=repas.idrepas
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


}

?>
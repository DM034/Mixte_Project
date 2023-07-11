<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegimeRepas extends BDDObject {


    protected $table = 'regimeRepas';


    function get_regime_repas($idregime)
    {
        $regime = $this->getAll('*','idregime='.$idregime);
        return $regime;
    }

    public function insertRegimeRepas($idregime,$idrepas){
        $donne = array(
            'idregime'=>$idregime,
            'idrepas'=>$idrepas
        );

        $this->db->insert($this->table, $donne);
    }


    function get_repas($idrepas){
        $this->db->where('idrepas', $idrepas);        

        $query = $this->db->get('repas');
        return $query->row();
    }

    function get_all_repas($idregime){
        $tab_regrep = $this->get_regime_repas($idregime);
        $tab_repas = array();

        for ($i=0; $i < count($tab_regrep) ; $i++) { 
            $tab_repas[$i] = $this->get_repas($tab_regrep[$i]->idrepas);
        }

        return $tab_repas;

    }


}

?>
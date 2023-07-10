<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegimeRepas extends BDDObject {

    protected $table = 'regimeRepas';

    public function insertRegimeRepas($idregime,$idrepas){
        $donne = array(
            'idregime'=>$idregime,
            'idrepas'=>$idrepas
        );

        $this->db->insert($this->table, $donne);
    }

}

?>
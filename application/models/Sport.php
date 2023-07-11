<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sport extends BDDObject {
    protected $table = 'sport';

    public function updateSport($idsport,$data){
        $update = array(
            'nomsport' =>$data['nomsport'],
            'idobjectif' =>$data['objectif'],
            'duree' =>$data['duree'],
            'variationPoids' =>$data['variationPoids']
        );

        $this->db->where('idsport', $idsport);
        $this->db->update($this->table, $update);
    }

    public function insertSport($arr){
        $data = array(
            'nomsport' => $arr['nomsport'],
            'idobjectif'=>$arr['objectif'],
            'duree'=>$arr['duree'],
            'variationPoids'=> $arr['variationPoids']
        );

        $this->db->insert($this->table,$data);
    }

}

?>
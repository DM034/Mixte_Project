<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RegimeClient extends BDDObject
{
    protected $table = 'objectif';

    function get_tout_objectif()
    {
        $objectif = $this->getAll(('*'));
        return $objectif;
    }

    function get_idregime_client($idclient)
    {
        $this->db->where('idclient', $idclient);
        $this->db->where('etat', 0);
        

        $query = $this->db->get('regimeClient');
        return $query->row();
      
    }

    function changer_regime($regime, $client)
    {
        $data = array(
            'idregime' => $regime,
            'idclient' => $client,
            'etat' => 1
        );

        $this->db->update('regimeclient', $data);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function ajouter_regime($regime, $client)
    {
        $data = array(
            'idregime' => $regime,
            'idclient' => $client,
            'etat' => 0
        );

        $this->db->insert('regimeclient', $data);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

   
}

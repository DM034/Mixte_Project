<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Statistique extends BDDObject {

    public function getStatistiqueMontant(){
        $sql = "SELECT dateEntree,sum(montant) as montant FROM 
        historiqueEntree  
        GROUP BY dateEntree
        ORDER BY dateEntree ASC";
    
        $query = $this->db->query($sql);
                
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }

}

?>
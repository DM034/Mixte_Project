<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Model {

    public function loginValideAdmin($mail, $password)
    {
        $this->db->where('mail', $mail);
        $this->db->where('pwd', $password);
        $query = $this->db->get('administrateur');

        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return false;
        }
    }

}

?>
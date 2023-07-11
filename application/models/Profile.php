<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Profile extends BDDObject{
    protected $table = 'profil';

    public function get_profile($idclient){
        $var = $this->getAll('*',"idclient = ".$idclient);
        return $var;
    }


}




?>
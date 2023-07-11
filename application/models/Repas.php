    <?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Repas extends BDDObject {

        protected $table = 'repas';

        public function insertRepas($data,$nomphoto,$path){
            $arr = array(
                'nomrepas' => $data['repas']
            );

            $this->db->insert($this->table, $arr);

            $last_insert_id = $this->db->insert_id();

            $arr1 = array(
                'idRepas'=>$last_insert_id,
                'nomPhoto' => $nomphoto,
                'pathPhoto' =>$path
            );
            $this->db->insert('repasPhoto',$arr1);
        }

        public function avoirRepasPhoto($idrepas){
            $sql = "SELECT repas.*,repasPhoto.nomPhoto,repasPhoto.pathPhoto 
            FROM repas JOIN repasPhoto
            ON repas.idrepas = repasPhoto.idrepas 
            WHERE repas.idrepas =".$idrepas;
            $query = $this->db->query($sql);
            
            if ($query->num_rows() > 0) {
                return $query->result();
            } else {
                return array();
            }
        }

        public function updateRepas($idrepas,$data){
            $arr = array(
                'nomrepas' => $data['repas']
            );

            $this->db->where('idrepas', $idrepas);
            $this->db->update($this->table, $arr);
        }




}

?>
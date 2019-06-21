<?php
class Warehouse_model extends CI_Model{

    public function viewStock(){
        $query=$this->db->get('product_import');
        return $query->result();

    }


}

?>
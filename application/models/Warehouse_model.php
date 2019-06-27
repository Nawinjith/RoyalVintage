<?php
class Warehouse_model extends CI_Model{

    public function viewStock(){
        $query=$this->db->get('product_import');
        return $query->result();

    }
    public function warehouseDetails(){
        $query=$this->db->get('warehouse');
        return $query->result();

    }
    public function updateStock($importNo){
		$data=array(
			'importNo'=>$this->input->post('importNo'),
			'productID_fk'=>$this->input->post('productID_fk'),
			'quantity'=>$this->input->post('quantity'),
            'dealerID_fk'=>$this->input->post('dealerID_fk'),
            'date'=>$this->input->post('date')
			);
			if($importNo==0){
				return $this->db->insert('product_import',$data);
			}else{
				$this->db->where('importNo',$importNo);
				return $this->db->update('product_import',$data);
			}
	}


}

?>
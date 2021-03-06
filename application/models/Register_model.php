<?php
class Register_model extends CI_Model{

    function insert($data){
        $this->db->insert('logintable', $data);
        return $this->db->insert_id();
    }

    function verify_email($key){

        $this->db->where('verifiactionKey', $key);
        $this->db->where('emailVerified', 'no');
        $query = $this->db->get('logintable');

        if($query->num_rows() > 0){
            
            $data = array(
                'emailVerified'  => 'yes'
            );
            $this->db->where('verifiactionKey', $key);
            $this->db->update('logintable', $data);
            return true;

        }else{
            return false;
        }
    }

    public function email_check($email){
 
        $this->db->select('*');
        $this->db->from('logintable');
        $this->db->where('email',$email);
        $query=$this->db->get();
       
        if($query->num_rows()>0){
          return false;
        }else{
          return true;
        }
       
    }
}

?>

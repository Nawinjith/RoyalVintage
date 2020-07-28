<?php
    class Login_model extends CI_Model{
        public function login_user($data){

          
            $condition = "email =" . "'" . $data['email'] . "' AND " . "password =" . "'" . $data['password'] . "'";
            $this->db->select('*');
            $this->db->from('logintable');
            $this->db->where($condition);
            $this->db->limit(1);
            $query = $this->db->get();

            if ($query->num_rows() == 1) {
              return true;
            }
            else
            {
              return false;
            }
            
            
        }
    }
?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelUser extends CI_Model {
   
   public function saveUser($registration){

        $this->db->insert('user',$registration);
        $result=$this->db->insert_id();
		    return $result;

   } 

    public function user($phone,$password){         
        $this->db->where('phone',$phone);
        $this->db->where('password',$password);
        $qu=$this->db->get('user');
        if($qu->num_rows()>0){   
        return $qu->result();
        }
     }

}
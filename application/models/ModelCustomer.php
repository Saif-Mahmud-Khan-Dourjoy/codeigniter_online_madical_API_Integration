<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class ModelCustomer extends CI_Model {
     
      public function saveCustomer($data){
    
		$this->db->insert_batch('ordercustomer',$data);
        $result=$this->db->insert_id();
		return $result;
	
    }


}
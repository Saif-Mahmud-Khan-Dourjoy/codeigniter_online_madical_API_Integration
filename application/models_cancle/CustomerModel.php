<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class CustomerModel extends CI_Model {

	public function __construct() {
             parent::__construct();
             
             $this->load->database();
    }

     public function getCustomers(){

           $query=$this->db->get('customer');
            return $query->result();
}
     public function saveCustomer($data){
    
		$this->db->insert('customer',$data);
        $result=$this->db->insert_id();
		return $result;
	
    }
}
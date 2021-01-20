<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelLists extends CI_Model {

         public function hospital(){

           $this->db->select("*");
           $this->db->from("hospital"); 
		  $qu=$this->db->get();
		  return $qu->result();
}

           public function diagnostic(){

           $this->db->select("*");
           $this->db->from("shop"); 
		  $qu=$this->db->get();
		  return $qu->result();
}
           public function drug_store(){

           $this->db->select("*");
           $this->db->from("drug_store"); 
		  $qu=$this->db->get();
		  return $qu->result();
}

          public function getmedicines($store_id){

           $this->db->select("*");
           $this->db->from("medicine_list");
           $this->db->where('store_id',$store_id); 
		  $qu=$this->db->get();
		  return $qu->result();
}

}

<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class DrugListModel extends CI_Model {

	public function __construct() {
             parent::__construct();
             
             $this->load->database();
    }

    public function drugList(){

           $query=$this->db->get('medicine_list');
            return $query->result();
    }

     public function getDrugList($store_id){

           $this->db->select("*");
           $this->db->from("medicine_list");
           $this->db->where('store_id',$store_id); 
		  $qu=$this->db->get();
		  return $qu->result();
}

}
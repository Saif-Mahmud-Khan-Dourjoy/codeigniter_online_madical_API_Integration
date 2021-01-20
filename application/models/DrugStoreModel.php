<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class DrugStoreModel extends CI_Model {

	public function __construct() {
             parent::__construct();
             
             $this->load->database();
    }

    public function getDrugStore(){

           $query=$this->db->get('drug_store');
            return $query->result();
    }

     public function drugStore(){

           $this->db->select("*");
           $this->db->from("drug_store"); 
		  $qu=$this->db->get();
		  return $qu->result();
}

}
<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class HospitalModel extends CI_Model {

	public function __construct() {
             parent::__construct();
             
             $this->load->database();
    }

    public function getHospital(){

           $query=$this->db->get('hospital');
            return $query->result();
    }

     public function hospital(){

           $this->db->select("*");
           $this->db->from("hospital"); 
		  $qu=$this->db->get();
		  return $qu->result();
}

}
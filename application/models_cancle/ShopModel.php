<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class ShopModel extends CI_Model {

	public function __construct() {
             parent::__construct();
             
             $this->load->database();
    }

    public function getshop(){

           $query=$this->db->get('shop');
            return $query->result();
    }

     public function shop(){

           $this->db->select("*");
           $this->db->from("shop"); 
		  $qu=$this->db->get();
		  return $qu->result();
}

}
<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class DoctorModel extends CI_Model {

	public function __construct() {
             parent::__construct();
             
             $this->load->database();
    }

    public function doctor(){

           $query=$this->db->get('doctor');
            return $query->result();
    }

     public function getDoctor($query){

           $this->db->select("*");
           $this->db->from("doctor"); 
		   $this->db->like('name', $query);
		   $this->db->or_like('specialized', $query);
		   $this->db->or_like('degree', $query);
		  $qu=$this->db->get();
		  return $qu->result();
}

     public function doclog($email,$password){         
        $this->db->where('email',$email);
        $this->db->where('password',$password);
        $qu=$this->db->get('doctor');
        if($qu->num_rows()>0){   
        return $qu->result();
        }
     }
      public function getAllDoctor(){

           $this->db->select("*");
           $this->db->from("doctor"); 
          $qu=$this->db->get();
          return $qu->result();
}

}
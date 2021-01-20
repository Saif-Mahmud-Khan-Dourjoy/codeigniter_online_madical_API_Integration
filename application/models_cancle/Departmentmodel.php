<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Departmentmodel extends CI_Model {

		public function __construct() {
             parent::__construct();
             
             $this->load->database();
    }

     public function department(){

           // $this->db->select("*");
           // $this->db->from("department"); 
		  $qu=$this->db->get('department');
		  return $qu->result();
}

 public function sub_department($dept_id){

           // $this->db->select("*");
           // $this->db->from("department");
              $this->db->where('dept_id',$dept_id);
		  $qu=$this->db->get('sub_department');
		  return $qu->result();
}


}
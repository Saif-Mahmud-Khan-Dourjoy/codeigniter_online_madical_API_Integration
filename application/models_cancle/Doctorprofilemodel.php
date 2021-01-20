<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Doctorprofilemodel extends CI_Model {

		public function __construct() {
             parent::__construct();
             
             $this->load->database();
    }
      public function doctorprofile($sub_dept_id){
      	$this->db->where('sub_dept_id',$sub_dept_id);
		  $qu=$this->db->get('doctor');
		  return $qu->result();
      }

}

<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Servicemodel extends CI_Model {

		public function __construct() {
             parent::__construct();
             
             $this->load->database();
    }

     public function get_service(){

           // $this->db->select("*");
           // $this->db->from("department"); 
		  $qu=$this->db->get('service');
		  return $qu->result();
}
     public function apply_eps(){
    	$data=array(
    		    'patient_name'      => $this->input->post('patient_name'), 
				'applicant_name'  => $this->input->post('applicant_name'),
                'applicant_number'         => $this->input->post('applicant_number'),
                'applicant_voter_id'         => $this->input->post('applicant_voter_id'),
                'user_id'         => $this->input->post('user_id'),
                'gender'         => $this->input->post('gender'),
                'service_id'         => $this->input->post('service_id'),
			);
		$this->db->insert('apply_service',$data);
        $result=$this->db->insert_id();
		return $result;
    }

    public function get_diagnostics(){

           $query=$this->db->get('diagnostic_center');
            return $query->result();
    }

     public function get_diagnostics_tests($diag_id){

           $this->db->select("*");
           $this->db->from("tests_list");
           $this->db->where('diagnostic_center_id',$diag_id); 
		  $qu=$this->db->get();
		  return $qu->result();
}

}
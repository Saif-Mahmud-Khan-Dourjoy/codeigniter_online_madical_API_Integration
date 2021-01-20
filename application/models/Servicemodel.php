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
    		    
				         'name'  => $this->input->post('name'),
                'email'         => $this->input->post('email'),
                'phone'         => $this->input->post('phone'),
                'user_id'         => $this->input->post('user_id'),
                'gender'         => $this->input->post('gender'),
                'service_id'         => $this->input->post('service_id'),
                'age'         => $this->input->post('age'),
                'marital_status'         => $this->input->post('marital_status'),
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
    public function get_med($data){
      
      $this->db->insert_batch('med_service', $data);
      $result=$this->db->insert_id();
      return $result;


    }

    public function support(){
      $data=array(
     
            'subject'         => $this->input->post('subject'),
            'user_id'         => $this->input->post('user_id'),
            'type'         => $this->input->post('types'),
            'detail' => $this->input->post('detail')
      );
    $this->db->insert('support',$data);
        $result=$this->db->insert_id();
        return $result;
    }  

}
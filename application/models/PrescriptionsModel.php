<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class PrescriptionsModel extends CI_Model {

	public function __construct() {
             parent::__construct();
             
             $this->load->database();
    }

     public function getPrescription(){

           $query=$this->db->get('prescription');
            return $query->result();
}

  //      public function savePrescription(){

  //   	$data=array(
  //   		    'medicine_name' => $this->input->post('medicine_name'), 
		// 		'time' 	   => $this->input->post('time'), 
  //               'quentity' => $this->input->post('quentity'),
                
		// 	);
		// $this->db->insert('prescription',$data);
  //       $result=$this->db->insert_id();
		// return $result;
  //   }

    public function create($data){
      
      $this->db->insert_batch('prescription', $data);


    }

    public function add_advice($data){
      
      $this->db->insert_batch('advices', $data);


    }

        public function getAllPrescription($user_id){

           $this->db->select("*");
           $this->db->where('user_id',$user_id);
           $this->db->order_by('id','DESC');
           $this->db->from("appointment"); 
      $qu=$this->db->get();
      return $qu->result();
}

public function doctor_prescription($user_id){
   $this->db->group_by('user_id');
  $this->db->select("*");
  $this->db->where('doctor_id',$user_id);
  $this->db->order_by('id','DESC');
  $this->db->from("appointment"); 
$qu=$this->db->get();
return $qu->result();
}

public function doctor_prescription_ind($user_id,$doc_id){

  $this->db->select("*");
  $this->db->where('doctor_id',$doc_id);
  $this->db->where('user_id',$user_id);
  $this->db->order_by('id','DESC');
  $this->db->from("appointment"); 
$qu=$this->db->get();
return $qu->result();
}


public function prescriptions($user_id){

  $this->db->select("*");
  $this->db->where('appointment_id',$user_id);
  $this->db->from("prescription"); 
$qu=$this->db->get();
return $qu->result();
}

public function advices($where){

  $this->db->select("*");
  $this->db->where($where);
  $this->db->from("advices"); 
  $qu=$this->db->get();
  return $qu->result();
}


}

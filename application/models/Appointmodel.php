<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Appointmodel extends CI_Model {

	public function __construct() {
             parent::__construct();
             
             $this->load->database();
    }

 public function get_visit($app_doctor_id){
 	     $this->db->select("*");
           $this->db->from("doctor");
           $this->db->where('id',$app_doctor_id); 
          $qu=$this->db->get();
          return $qu->result();
 }   

 public function chamber_appoint(){
    	$data=array(
			'patient_name'      => $this->input->post('patient_name'), 
            'appointment_date'  => $this->input->post('appointment_date'),
            'doctor_id'         => $this->input->post('app_doctor_id'),
            'doctor_name'         => $this->input->post('app_doctor_name'),
            'user_id'         => $this->input->post('user_id'),
            'age'         => $this->input->post('age'),
            'gender' => $this->input->post('gender'),
            'address' => $this->input->post('address')
			);
		$this->db->insert('appointment',$data);
        $result=$this->db->insert_id();
		    return $result;
    }
  public function msg_appoint(){
      $data=array(
     
            'doc_id'         => $this->input->post('app_doctor_id'),
            'user_id'         => $this->input->post('user_id'),
            'message' => $this->input->post('message')
      );
    $this->db->insert('msg_appoint',$data);
        $result=$this->db->insert_id();
        return $result;
    }  

 public function get_date($app_doctor_id){
       $this->db->select("*");
           $this->db->from("doctor");
           $this->db->where('id',$app_doctor_id); 
          $qu=$this->db->get();
          return $qu->result();
 }   

  // public function check_appoint($app_doctor_id){
     
  //          $this->db->select("*");
  //          $this->db->from("appointment_timeanddate");
  //          $this->db->where(' doc_id',$app_doctor_id); 
  //         $qu=$this->db->get();
  //         return $qu->result();


  // }   

   public function set_appoint($data){

    $this->db->insert('appointment',$data);
        $result=$this->db->insert_id();
        return $result;
    }

     public function appoint($app_doctor_id){
       $this->db->select("*");
           $this->db->from("appointment");
           $this->db->where('doctor_id',$app_doctor_id); 
          $qu=$this->db->get();
          return $qu->result();
 }  

     public function appoints($app_doctor_id,$date){
       $this->db->select("*");
           $this->db->from("appointment");
           $this->db->where('doctor_id',$app_doctor_id); 
           $this->db->where('appointment_date',$date); 
          $qu=$this->db->get();
          return $qu->result();
 }  



    public function emergency_appoint(){
         $data=array(
            'doctor_id'         => $this->input->post('id'),
            'doctor_name'         => $this->input->post('name'),
            'user_id'         => $this->input->post('user_id'), 
        );
    $this->db->insert('appointment',$data);
    $result=$this->db->insert_id();
    return $result;

   }


  public function patient_info($user_id,$date,$time){
           $this->db->select("*");
           $this->db->from("appointment");
           $this->db->where('user_id',$user_id); 
           $this->db->where('appointment_date',$date); 
           $this->db->where('time',$time); 
          $qu=$this->db->get();
          return $qu->result();


  }


   

}


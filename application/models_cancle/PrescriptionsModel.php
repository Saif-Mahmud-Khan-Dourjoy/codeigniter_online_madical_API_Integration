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

        public function getAllPrescription(){

           $this->db->select("*");
           $this->db->from("prescription"); 
      $qu=$this->db->get();
      return $qu->result();
}

}
